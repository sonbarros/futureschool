<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aula;
use App\Models\Modulo;

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
