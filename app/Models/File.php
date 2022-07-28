<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Aula;
use App\Models\Icon;

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

    public function icon()
    {
        return $this->belongsTo(Icon::class)->withDefault();
    }


}
