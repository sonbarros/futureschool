<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use app\Models\Icon;

class CobolCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::create([
            'name'=>'Cobol'
        ]); // Criando curso

        $curso->setHoursClasses(0, 40);
        $curso->number_classes = 3;
        $curso->save();

        $aula1 = $curso->aulas()->create([
            'name'=>'Introdução a Lógica de programação',
            'description'=>'Nessa aula você terá conceitos de Lógica de programação.'
        ]);

        $file1_aula1 = $aula1->files()->create([
            'description'=>'Lógica'
        ]); // anexando arquivo

        $file1_aula1->icon()->associate(Icon::find(1));
        $file1_aula1->save();

        $file2_aula1 = $aula1->files()->create([
            'description'=>'Introdução'
        ]); // anexando arquivo

        $file2_aula1->icon()->associate(Icon::find(2));
        $file2_aula1->save();

        $file3_aula1 = $aula1->files()->create([
            'description'=>'Exercício 1'
        ]); // anexando arquivo

        $file3_aula1->icon()->associate(Icon::find(2));
        $file3_aula1->save();

        $file4_aula1 = $aula1->files()->create([
            'description'=>'Numerais'
        ]); // anexando arquivo

        $file4_aula1->icon()->associate(Icon::find(1));
        $file4_aula1->save();

        $file5_aula1 = $aula1->files()->create([
            'description'=>'Numerais'
        ]); // anexando arquivo

        $file5_aula1->icon()->associate(Icon::find(2));
        $file5_aula1->save();

        $file6_aula1 = $aula1->files()->create([
            'description'=>'Lógica 2'
        ]); // anexando arquivo

        $file6_aula1->icon()->associate(Icon::find(1));
        $file6_aula1->save();

        $file7_aula1 = $aula1->files()->create([
            'description'=>'Lógica 2'
        ]); // anexando arquivo

        $file7_aula1->icon()->associate(Icon::find(2));
        $file7_aula1->save();

        $modulo1 = $curso->modulos()->create(); // Cria modulo
        $aula1->modulo()->associate($modulo1);
        $aula1->save();

        //aula 2
        $aula2 = $curso->aulas()->create([
            'name'=>'Introdução a linguagem de programação COBOL',
            'description'=>' Aqui você poderá baixar a apostila de COBOL e assistir as aulas.'
        ]);

        $file1_aula2 = $aula2->files()->create([
            'description'=>'Apostila'
        ]); // anexando arquivo

        $file1_aula2->icon()->associate(Icon::find(1));
        $file1_aula2->save();

        $file2_aula2 = $aula2->files()->create([
            'description'=>'Aula 1'
        ]); // anexando arquivo

        $file2_aula2->icon()->associate(Icon::find(2));
        $file2_aula2->save();

        $file3_aula2 = $aula2->files()->create([
            'description'=>'Introdução'
        ]); // anexando arquivo

        $file3_aula2->icon()->associate(Icon::find(1));
        $file3_aula2->save();

        $file4_aula2 = $aula2->files()->create([
            'description'=>'Introdução'
        ]); // anexando arquivo

        $file4_aula2->icon()->associate(Icon::find(2));
        $file4_aula2->save();

        $modulo2 = $curso->modulos()->create(); // Cria modulo
        $aula2->modulo()->associate($modulo2);
        $aula2->save();

        //aula 3
        $aula3 = $curso->aulas()->create([
            'name'=>'Exercicios de COBOL',
            'description'=>'Aqui você poderá baixar a apostila contendo exercicios.'
        ]);

        $file1_aula3 = $aula3->files()->create([
            'description'=>'Exercícios'
        ]); // anexando arquivo

        $file1_aula3->icon()->associate(Icon::find(1));
        $file1_aula3->save();

        $file2_aula3 = $aula3->files()->create([
            'description'=>'Exercício 1'
        ]); // anexando arquivo

        $file2_aula3->icon()->associate(Icon::find(2));
        $file2_aula3->save();

        $file3_aula3 = $aula3->files()->create([
            'description'=>'Exercício 1'
        ]); // anexando arquivo

        $file3_aula3->icon()->associate(Icon::find(2));
        $file3_aula3->save();

        $file4_aula3 = $aula3->files()->create([
            'description'=>'Exercício 1'
        ]); // anexando arquivo

        $file4_aula3->icon()->associate(Icon::find(2));
        $file4_aula3->save();

        $file5_aula3 = $aula3->files()->create([
            'description'=>'Exercício 2'
        ]); // anexando arquivo

        $file5_aula3->icon()->associate(Icon::find(2));
        $file5_aula3->save();

        $file6_aula3 = $aula3->files()->create([
            'description'=>'Exercício 2'
        ]); // anexando arquivo

        $file6_aula3->icon()->associate(Icon::find(2));
        $file6_aula3->save();

        $file7_aula3 = $aula3->files()->create([
            'description'=>'Exercício 3'
        ]); // anexando arquivo

        $file7_aula3->icon()->associate(Icon::find(2));
        $file7_aula3->save();

        $file8_aula3 = $aula3->files()->create([
            'description'=>'Exercício 4'
        ]); // anexando arquivo

        $file8_aula3->icon()->associate(Icon::find(2));
        $file8_aula3->save();

        $file9_aula3 = $aula3->files()->create([
            'description'=>'Exercício 5'
        ]); // anexando arquivo

        $file9_aula3->icon()->associate(Icon::find(2));
        $file9_aula3->save();

        $file10_aula3 = $aula3->files()->create([
            'description'=>'Exercício 5'
        ]); // anexando arquivo

        $file10_aula3->icon()->associate(Icon::find(2));
        $file10_aula3->save();

        $file11_aula3 = $aula3->files()->create([
            'description'=>'Exercício 6'
        ]); // anexando arquivo

        $file11_aula3->icon()->associate(Icon::find(2));
        $file11_aula3->save();

        $file12_aula3 = $aula3->files()->create([
            'description'=>'Exercício 6'
        ]); // anexando arquivo

        $file12_aula3->icon()->associate(Icon::find(2));
        $file12_aula3->save();

        $file13_aula3 = $aula3->files()->create([
            'description'=>'Resoluções'
        ]); // anexando arquivo

        $file13_aula3->icon()->associate(Icon::find(1));
        $file13_aula3->save();

        $modulo3 = $curso->modulos()->create(); // Cria modulo
        $aula3->modulo()->associate($modulo3);
        $aula3->save();




    }
}
