<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aula;

class Modulo extends Model
{
    public $timestamps = false;

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
