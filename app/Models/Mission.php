<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    protected $fillable = ['intitule','description','debut','fin','fonction','remuneration','desc_rem','qualification','statut'];
    use HasFactory;

    public function professionnels()
    {
        return $this->belongsToMany(Professionnel::class, 'mission_particulier_professionnel');
    }

    function particulier()
    {
        return $this->belongsToMany(particulier::class,'mission_particulier_professionnel');
    }
}
