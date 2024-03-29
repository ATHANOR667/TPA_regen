<?php

namespace App\Http\Controllers;

use App\Http\Requests\Data\Mission_Request;
use App\Http\Requests\Experience_Request;
use App\Http\Requests\RetourRequest;
use App\Models\Experience;
use App\Models\Mission;
use App\Models\particulier;
use App\Models\professionnel;
use App\Http\Controllers\Auth_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class TPA_Controller extends Auth_Controller
{

    /** ACCEUIL
     *
     *

     */
    public function accueil()
    {
        return view('TPA.Pages.accueil.guest');
    }

    public function accueil_part(particulier $part)
    {
        //exclusion des experiences du profil professionnel associe a ce profil particulier
        $pro = professionnel::where('email', '=', $part->email)->first();

        $exps = \App\Models\Experience::select('fonction')->distinct();

        if ($pro != null) {
            $exps = $exps->where('professionnel_id', '!=', $pro->id);
        }

        $exps = $exps->get();

        return view('TPA.Pages.accueil.part')->with(['part' => $part, 'exps' => $exps]);
    }

    public function accueil_pro(professionnel $pro )
    {
        $exps = $pro->Experience()->get();
        //$missions = $pro->Mission()->where('statut','=','en attente');
        return view('TPA.Pages.accueil.pro')->with(['pro'=>$pro,'exps'=>$exps]);
    }

    /** ABOUT
     *
     *
     *
     */
    public function about_guest()
    {
        return view('TPA.Pages.about.about_guest');
    }
    public function about( particulier  $user)
    {
        return view('TPA.Pages.about.about')->with(['part'=>$user]);
    }

    public function about_pro(professionnel $pro)
    {
        return view('TPA.Pages.about.about_pro')->with(['pro'=>$pro]);
    }
    /** CONTACT
     *
     *
     *
     */

    public function contact_guest()
    {
        return view('TPA.Pages.contact.contact_guest');
    }

    public function contact(particulier $user)
    {
            return view('TPA.Pages.contact.contact')->with(['part' => $user]);
    }

    public function contact_pro(professionnel $pro)
    {
            return view('TPA.Pages.contact.contact_pro')->with(['pro' => $pro]);
    }


    /**
     * CONTROLLER DES EXPERIENCES
     *
     */




    public function experience(professionnel $pro )
    {
        $part = particulier::where('email','=',$pro->email)->get();
        return view('TPA.Data.exp')->with(['part'=>$part,'pro'=>$pro]);
    }

    public function exp_process(professionnel $pro, Experience_Request $request)//
    {
        $part = particulier::where('email','=',$pro->email)->get();
        $exp = $request->validated();
        $e =Experience::create([
            'fonction'=>$exp['fonction'],
            'debut'=>$exp['debut'],
            'fin'=>$exp['fin'],
            'remuneration'=>$exp['remuneration'],
            'desc_rem'=>$exp['desc_rem'],
            'qualification'=>$exp['qualification'],
        ]);
        $e->professionnel()->associate($pro);
        $e->save();
        return redirect()->route('TPA.accueil_pro',['pro'=>$pro->id]);//->with('message','Operation reussie');

    }

    public function experience_edit(professionnel $pro,particulier $part,Experience $exp)
    {
        return view('TPA.Data.exp')->with(['part'=>$part,'pro'=>$pro,'exp'=>$exp]);
    }

    /**
     * CONTROLLER DES MISSIONS
     *
     */

    public function mission(professionnel $pro ,particulier $part)
    {
        return view('TPA.Data.mission')->with(['part'=>$part,'pro'=>$pro]);
    }

    public function mission_process( professionnel $pro ,particulier $part, Mission_Request $request)
    {
       // dd($request->validated());

        $mission = Mission::create([
            'intitule' =>$request->intitule,
            'description' => $request->description,
            'fonction' =>$request->fonction,
            'debut' => $request->debut,
            'fin' => $request->fin,
            'remuneration'=>$request->remuneration,
            'desc_rem'=>$request->desc_rem,
            'qualification'=>$request->qualification,
            'statut'=>'en attente'
        ]);
        // attache avec une fonction
        //$mission->professionnels()->syncWithoutDetaching([$pro->id]);
        //$mission->particulier()->syncWithoutDetaching([$part->id]);
        // Insérez les enregistrements dans la table pivot en utilisant DB::
        DB::table('mission_particulier_professionnel')->insert([
            'mission_id' => $mission->id,
            'particulier_id' => $part->id,
            'professionnel_id' => $pro->id,
        ]);



        $mission->save();
        //mise a jour du nombre de propositions recue/ envoyee chez tous les part et les usr
        DB::table('professionnels')
            ->update([
                'prop_recue' => DB::raw('(SELECT COUNT(*)
                                   FROM mission_particulier_professionnel mpp
                                   JOIN missions m ON m.id = mpp.mission_id
                                   WHERE mpp.professionnel_id = professionnels.id)')
            ]);
        DB::table('particuliers')
            ->update([
                'prop_mission' => DB::raw('(SELECT COUNT(*)
                                   FROM mission_particulier_professionnel mpp
                                   JOIN missions m ON m.id = mpp.mission_id
                                   WHERE mpp.particulier_id = particuliers.id)')
            ]);
        return to_route('TPA.mes_offres',['part'=>$part])->with('message','Votre mission est desormais en attente ');
    }

    /**
     * CONTROLLER DES OFFRES CHEZ PART ,OFFRE CHEZ PRO ET LISTE DES PRO D'UNE ACTIVITE
     *
     */

    public function mes_offres( particulier $part)
    {

        $missions = Mission::join('mission_particulier_professionnel', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
            ->where('mission_particulier_professionnel.particulier_id', $part->id)
            ->where('missions.statut', 'en attente')
            ->select('missions.*')
            ->get();

        $missions_r = Mission::join('mission_particulier_professionnel', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
            ->where('mission_particulier_professionnel.particulier_id', $part->id)
            ->where('missions.statut', 'refusee')
            ->select('missions.*')
            ->get();

        $missions_a = Mission::join('mission_particulier_professionnel', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
            ->where('mission_particulier_professionnel.particulier_id', $part->id)
            ->where('missions.statut', 'acceptee')
            ->select('missions.*')
            ->get();
        return view('TPA.Pages.mes_offres')->with(['missions'=>$missions,'missions_r'=>$missions_r,'missions_a'=>$missions_a,'part'=>$part]);
    }

    public function mes_offres_recues( professionnel $pro)
    {
        $missions = Mission::join('mission_particulier_professionnel', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
            ->where('mission_particulier_professionnel.professionnel_id', $pro->id)
            ->where('missions.statut', 'en attente')
            ->select('missions.*')
            ->get();

        $missions_r = Mission::join('mission_particulier_professionnel', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
            ->where('mission_particulier_professionnel.professionnel_id', $pro->id)
            ->where('missions.statut', 'refusee')
            ->select('missions.*')
            ->get();

        $missions_a = Mission::join('mission_particulier_professionnel', 'missions.id', '=', 'mission_particulier_professionnel.mission_id')
            ->where('mission_particulier_professionnel.professionnel_id', $pro->id)
            ->where('missions.statut', 'acceptee')
            ->select('missions.*')
            ->get();

        return view('TPA.Pages.mes_offres_recues')->with(['missions'=>$missions,'missions_r'=>$missions_r,'missions_a'=>$missions_a,'pro'=>$pro ]);
    }



    public  function liste_pro(particulier $part  , $fonction )
    {
        $pro = professionnel::where('email', '=', $part->email)->first();

        $pros = professionnel::join('experiences', 'professionnels.id', '=', 'experiences.professionnel_id')
            ->where('experiences.fonction', $fonction)
            ->select('professionnels.*');

        if ($pro != null) {
            $pros = $pros->where('professionnels.id', '!=', $pro->id);
        }

        $pros = $pros->get();

        return view('TPA.Pages.liste_pro')->with(['part' => $part, 'pros' => $pros]);
    }

    /**
     * CONTROLLER DES SHOW
     *
     */

    /** SHOW DU PROFESSIONNEL POUR LE PARTICULIER */
    public function pro_show(professionnel $pro,particulier $part )
    {
        $exps = Experience::join('professionnels', 'professionnels.id', '=', 'experiences.professionnel_id')
            ->where('experiences.professionnel_id',$pro->id)
            ->select('experiences.*')
            ->get();

        $retours = professionnel::join('mission_particulier_professionnel','professionnels.id','=','mission_particulier_professionnel.professionnel_id')
            ->where('mission_particulier_professionnel.professionnel_id',$pro->id)
            ->select('mission_particulier_professionnel.*')
            ->get();

        return view('TPA.Pages.Show.pro')->with(['pro'=>$pro,'part'=>$part,'exps'=>$exps,'retours'=> $retours]);
    }
    /**
     *
     *
     * SHOW DU PARTICULIER POUR LE PROFESSIONEL
     */
    public function part_show(professionnel $pro,particulier $part )
    {
        $retours = particulier::join('mission_particulier_professionnel','particuliers.id','=','mission_particulier_professionnel.particulier_id')
            ->where('mission_particulier_professionnel.particulier_id',$part->id)
            ->select('mission_particulier_professionnel.*')
            ->get();
        return view('TPA.Pages.Show.part')->with(['pro'=>$pro,'part'=>$part,'retours'=> $retours]);
    }
    /** S
     *
     *
     * HOW DE LA MISSION POUR PROFESSIONNEL
     */

    PUBLIC function  mission_show( Mission $mission,professionnel $pro)
    {
        $part = particulier::join('mission_particulier_professionnel','particuliers.id','=','mission_particulier_professionnel.particulier_id')
            ->where('mission_particulier_professionnel.mission_id',$mission->id)
            ->select('particuliers.*')
            ->get();
        return view('TPA.Pages.Show.mission_pro')->with(['mission'=>$mission ,'pro' =>$pro , 'part'=>$part]);
    }

    public function mission_show_process( Mission $mission ,professionnel $pro , Request $request)
    {
        $mission->update(['statut'=>$request->statut]);
        $mission->update();
        //mise a jour du nombre de propositions recue/ envoyee chez tous les part et les usr
        DB::table('professionnels')
            ->update([
                'prop_acceptee' => DB::raw('(SELECT COUNT(*)
                           FROM mission_particulier_professionnel mpp
                           JOIN missions m ON m.id = mpp.mission_id
                           WHERE mpp.professionnel_id = professionnels.id
                           AND m.statut = "acceptee")')
            ]);

        DB::table('particuliers')
            ->update([
                'prop_acceptee' => DB::raw('(SELECT COUNT(*)
                           FROM mission_particulier_professionnel mpp
                           JOIN missions m ON m.id = mpp.mission_id
                           WHERE mpp.particulier_id = particuliers.id
                           AND m.statut = "acceptee")')
            ]);
        return redirect()->route('TPA.mes_offres_recues',['pro'=>$pro]);
    }

    /**
     *
     *
     * MISSION POUR PARTICULIER
     */

    public  function mission_show_part(Mission $mission , particulier $part  )
    {
        return view('TPA.Pages.Show.mission_part')->with(['mission'=>$mission,'part'=>$part]);
    }

    public  function mission_modify(Mission $mission , particulier $part)
    {
        return view('TPA.Data.mission_modify')->with(['mission'=>$mission]);
    }

    public  function mission_modify_process(Mission $mission , particulier $part, Mission_Request $request)
    {
        $mission->update([
            'intitule'=>$request->intitule,
            'description'=> $request->description,
            'debut'=>$request->debut,
            'fin'=>$request->fin,
            'fonction'=>$request->fonction,
            'remuneration'=>$request->remuneration,
            'desc_rem'=>$request->desc_rem,
            'qualifiction'=>$request->qualification
            ]);
        return redirect()->route('TPA.mes_offres',['part'=>$part]);
    }

    /**
     *
     *
     * SHOW DE L'experience
     */

    public function  exp_show_part(Experience $exp)
    {
        return view('TPA.Pages.Show.exp')->with(['exp'=>$exp]);
    }

    public function  exp_show_pro(Experience $exp, professionnel $pro)
    {
        return view('TPA.Pages.Show.exp_pro')->with(['exp'=>$exp,'pro'=>$pro]);
    }

    public function exp_modify(Experience $exp, professionnel $pro)
    {
        return view('TPA.Data.exp_modify')->with(['exp'=>$exp,'pro'=>$pro]);
    }

    public function exp_modify_process( Experience $exp, professionnel $pro ,Experience_Request $request)
    {
        $exp->update([
            'fonction'=>$request->fonction,
            'debut'=>$request->debut,
            'fin'=>$request->fin,
            'remuneration'=>$request->remuneration,
            'desc_rem'=>$request->desc_rem,
            'qualifiction'=>$request->qualification
        ]);
        return redirect()->route('TPA.exp_show_pro',['exp'=>$exp,'pro'=>$pro])->with('message','Modification effectuee avec success');
    }

    /** NOTES ET RETOUR
     *
     *
     *
     */


    /* PROFESSIONNEL PAR PARTICULIER */
    public function pro_par_part(Mission $mission , particulier $part , professionnel $pro, RetourRequest $request )
    {
        return view('TPA.Data.Note');
    }
    public function pro_par_part_process(Mission $mission , particulier $part , professionnel $pro, RetourRequest $request)
    {
        $mission->professionnels()->updateExistingPivot($pro->id, [
        'Desc_prof_par_part' => $request->description,
        'note_prof_par_part'=> $request->note
        ]);
        return view('TPA.Data.Note')->with(['message'=>'nous vous remercions de votre retour']);
    }

    /* PARTICULIER PAR PROFFESSIONNEL */
    public function part_par_pro(Mission $mission , particulier $part , professionnel $pro)
    {
        return view('TPA.Data.Note');
    }
    public function part_par_pro_process(Mission $mission , particulier $part , professionnel $pro ,  RetourRequest $request)
    {
        $mission->particulier()->updateExistingPivot($part->id, [
        'Desc_part_par_prof' => $request->description,
        'note_part_par_prof'=> $request->note
        ]);
        return view('TPA.Data.Note')->with(['message'=>'nous vous remercions de votre retour']);
    }
}

