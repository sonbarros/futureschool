<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aula;
use App\Models\Modulo;
use App\Models\InfoTag;
use App\Models\Traits\SetNullForZero;

class Curso extends Model
{   
    use SetNullForZero;

    protected $fillable = [
        'name'
    ];

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }

    public function modulos()
    {
        return $this->hasMany(Modulo::class);
    }

    public function infotags()
    {
        return $this->hasMany(InfoTag::class);
    }

    public function setHoursClasses($hora, $min)
    {   
        $this->hours_classes = $hora + minutesToHours($min);
    }

}
