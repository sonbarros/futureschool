<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aula;
use App\Modulo;

class Curso extends Model
{
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
}
