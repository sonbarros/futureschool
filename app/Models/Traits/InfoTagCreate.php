<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

trait InfoTagCreate
{
    public static function bootInfoTagCreate()
    {
        static::saving(function ($curso) {
            if(isset($curso->number_classes) && $curso->number_classes > 0) {
                
                // Prepara texto
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
                    ]); // criando apartir do relacionamento
                } catch (\Exception $e) {
                    // aplicar um log aqui
                }
                
            }
        });
    }
}