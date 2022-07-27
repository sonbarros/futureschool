<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Curso;
use App\File;
use App\Modulo;

class Aula extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }
}
