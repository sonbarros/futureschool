<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aula;
use App\Models\Modulo;
use App\Models\InfoTag;
use App\Models\Traits\InfoTagCreate;

class Curso extends Model
{   
    use InfoTagCreate;

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

    

}
