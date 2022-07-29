<?php

namespace App\Models\Traits;

trait CalcOfHours
{
    public function hoursToMinutes($hora)
    {
        return $hora * 60;
    }

    public function minutesToHours($min)
    {
      return $min / 60;
    }
}