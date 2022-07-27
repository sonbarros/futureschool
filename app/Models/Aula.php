<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;
use App\Models\File;
use App\Models\Modulo;

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
