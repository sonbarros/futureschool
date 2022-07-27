<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aula;

class Modulo extends Model
{
    public $timestamps = false;

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
