<?php


function hoursToMinutes($hour) 
{
    return $hour * 60;
}

function minutesToHours($min) 
{
    return $min / 60;
}

function hourMinuteCustom($hour)
{
    $hourInteger = (int) $hour;
    $hourMinute = $hour - $hourInteger;
    //return $hourMinute;
    if($hourInteger > 0) {
        return $hourInteger . 'h ' . (int) hoursToMinutes($hourMinute) . 'm'; // "1h 10m"
    }else {
        return (int) hoursToMinutes($hourMinute) . 'min'; // "50min"
    }
}

function getNameInitials($name)
{
    if(str_word_count($name) == 1) {
        return $name[0];
    } else {
        $firstCharacter = $name[0];
        $firstCharacter .= strrchr($name,' ')[1]; // strrchr() pega ultima palavra da string [1]
        return $firstCharacter;
    }
}