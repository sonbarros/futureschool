<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Aula;

class File extends Model
{   
    public $timestamps = false;
    protected $fillable = [
        'aula_id',
        'description',
        'ico_url'
    ];

    public function aula()
    {
        return $this->belongsTo(Aula::class);
    }
}
