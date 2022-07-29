<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

trait SetNullForZero
{
    public static function bootSetNullForZero()
    {
        static::saving(function ($curso) {
            
            if(isset($curso->number_classes) && $curso->number_classes == 0) {
                $curso->number_classes = null;               
            }

            if(isset($curso->hours_classes) && $curso->hours_classes == 0) {
                $curso->hours_classes = null;
            }

        });
    }

}