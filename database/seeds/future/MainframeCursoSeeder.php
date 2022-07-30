<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class MainframeCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::create([
            'name'=>'Mainframe'
        ]); // Criando curso

        $curso->setHoursClasses(0, 40);
        $curso->number_classes = 2;
        $curso->save();


    }
}
