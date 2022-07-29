<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

trait InfoTagCreate
{
    public static function bootInfoTagCreate()
    {
        static::saving(function ($curso) {
            if(isset($curso->number_classes)) {
                
                if($curso->number_classes > 0) {
                    self::numberClassesCreateOrUpdate($curso);
                }else {
                    
                    try {
                        $tag = $curso->infotags()->where('curso_column', 'number_classes')->firstOrFail();
                        $tag->delete();
                        $curso->number_classes = null;
                    } catch (ModelNotFoundException $e) {
                        // lançar um log
                    }
                    
                }
                
            }
            if(isset($curso->hours_classes)) {
                if($curso->hours_classes > 0) {
                    self::hoursClassesCreateOrUpdate($curso);
                }else {

                    try {
                        $tag = $curso->infotags()->where('curso_column', 'hours_classes')->firstOrFail();
                        $tag->delete();
                        $curso->hours_classes = null;
                    } catch (ModelNotFoundException $e) {
                        // lançar um log
                    }
                    
                }
                
            }
        });
    }

    private static function numberClassesCreateOrUpdate($curso)
    {
        $number = $curso->number_classes;
        $newDescription = $number > 1 ? $number.' aulas': $number.' aula';
        
        try {
            $infoTag = $curso->infotags()->where('curso_column', 'number_classes')->firstOrfail();
            $infoTag->description = $newDescription;
            $infoTag->save();
        } catch (ModelNotFoundException $e) {
            $curso->infotags()->create([
              'curso_column'=>'number_classes',
              'description'=>$newDescription
            ]);
        } catch (\Exception $e) {
            // aplicar um log aqui
        }
    }

    private static function hoursClassesCreateOrUpdate($curso)
    {
        $horas = $curso->hours_classes;
        
        $horaInteger = (int) $horas; // Um artificil para desmebrar o inteiro da porcentagem
        $horaMinutos = $horas - $horaInteger;

        $minutos = $horaMinutos * 60; // Transforma porcentagem de horas em minutos
        
        if($horaInteger > 0) {
            $newDescription = $horaInteger . 'h ' .  $minutos . 'm';
        }else {
            $newDescription = $minutos . 'min';
        }

        try {
            $infoTag = $curso->infotags()->where('curso_column', 'hours_classes')->firstOrfail();
            $infoTag->description = $newDescription;
            $infoTag->save();
        } catch (ModelNotFoundException $e) {
            $curso->infotags()->create([
              'curso_column'=>'hours_classes',
              'description'=>$newDescription
            ]); // criando apartir do relacionamento
        } catch (\Exception $e) {
            // aplicar um log aqui
        }
    }
}