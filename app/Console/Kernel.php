<?php

namespace App\Console;

use App\Mail\PasswordReset;
use App\Mail\RetourPartParPro;
use App\Mail\RetourProParPart;
use App\Models\particulier;
use App\Models\professionnel;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use App\Models\Mission;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $dateDuJour = Carbon::now()->format('Y-m-d');
            $missions = Mission::all();
            foreach ($missions as $mission ){
                $dateEnregistree = $mission->fin ;
                $r = Mission::join('mission_particulier_professionnel','mission_particulier_professionnel.mission_id', '=','missions.id')
                    ->where('mission_particulier_professionnel.mission_id',$mission->id)
                    ->where('missions.statut', 'acceptee')
                    ->get('mission_particulier_professionnel.*');

                $part = particulier::find($r[0]->particulier_id);
                $pro = professionnel::find($r[0]->professionnel_id);
                if ($dateEnregistree == $dateDuJour) {
                    Mail::to($pro->email)->send(new RetourPartParPro($part,$pro,$mission));
                    //sleep(1);
                    Mail::to($part->email)->send(new RetourProParPart($part,$pro,$mission));
                    //sleep(1);

                }
            }

        })->daily();


    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
