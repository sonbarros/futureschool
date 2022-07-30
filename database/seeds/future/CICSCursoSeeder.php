<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Icon;

class CICSCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::create([
            'name'=>'CICS'
        ]); // Criando curso

        $curso->setHoursClasses(0, 40);
        $curso->number_classes = 2;
        $curso->save();

        $aula1 = $curso->aulas()->create([
            'name'=>'Primeira etapa do curso de CICS',
            'description'=>'Nesta etapa deste curso, você aprenderá (na prática) os principais comandos do TSO. '
        ]);

        $file1_aula1 = $aula1->files()->create([
            'description'=>'Apostila'
        ]); // anexando arquivo

        $file1_aula1->icon()->associate(Icon::find(1));
        $file1_aula1->save();

        $file2_aula1 = $aula1->files()->create([
            'description'=>'Ambiente'
        ]); // anexando arquivo

        $file2_aula1->icon()->associate(Icon::find(2));
        $file2_aula1->save();

        $file3_aula1 = $aula1->files()->create([
            'description'=>'Mapa'
        ]); // anexando arquivo

        $file3_aula1->icon()->associate(Icon::find(2));
        $file3_aula1->save();

        $file4_aula1 = $aula1->files()->create([
            'description'=>'Pgm Menu'
        ]); // anexando arquivo

        $file4_aula1->icon()->associate(Icon::find(2));
        $file4_aula1->save();

        $file5_aula1 = $aula1->files()->create([
            'description'=>'Pgm Incl.'
        ]); // anexando arquivo

        $file5_aula1->icon()->associate(Icon::find(2));
        $file5_aula1->save();

        $file6_aula1 = $aula1->files()->create([
            'description'=>'Pgm Cons.'
        ]); // anexando arquivo

        $file6_aula1->icon()->associate(Icon::find(2));
        $file6_aula1->save();

        $file7_aula1 = $aula1->files()->create([
            'description'=>'Pgm Alter.'
        ]); // anexando arquivo

        $file7_aula1->icon()->associate(Icon::find(2));
        $file7_aula1->save();

        $file8_aula1 = $aula1->files()->create([
            'description'=>'Pgm Excl.'
        ]); // anexando arquivo

        $file8_aula1->icon()->associate(Icon::find(2));
        $file8_aula1->save();

        $file9_aula1 = $aula1->files()->create([
            'description'=>'Pgm Rela1.'
        ]); // anexando arquivo

        $file9_aula1->icon()->associate(Icon::find(2));
        $file9_aula1->save();

        $file10_aula1 = $aula1->files()->create([
            'description'=>' Pgm Rela2.'
        ]); // anexando arquivo

        $file10_aula1->icon()->associate(Icon::find(2));
        $file10_aula1->save();

        $file11_aula1 = $aula1->files()->create([
            'description'=>'Pgm Rela3.'
        ]); // anexando arquivo

        $file11_aula1->icon()->associate(Icon::find(2));
        $file11_aula1->save();

        $file12_aula1 = $aula1->files()->create([
            'description'=>'Repro Vsam'
        ]); // anexando arquivo

        $file12_aula1->icon()->associate(Icon::find(2));
        $file12_aula1->save();


        $modulo1 = $curso->modulos()->create(); // Cria modulo
        $aula1->modulo()->associate($modulo1);
        $aula1->save();
        
        //aula 2
        $aula2 = $curso->aulas()->create([
            'name'=>'Revisão geral do curso de CICS',
            'description'=>'Nesta aula você irá rever todos comandos utilizados no curso.'
        ]);

        $file1_aula2 = $aula2->files()->create([
            'description'=>'Revisão'
        ]); // anexando arquivo

        $file1_aula2->icon()->associate(Icon::find(1));
        $file1_aula2->save();

        $file2_aula2 = $aula2->files()->create([
            'description'=>'Revisão'
        ]); // anexando arquivo

        $file2_aula2->icon()->associate(Icon::find(2));
        $file2_aula2->save();

        $modulo2 = $curso->modulos()->create(); // Cria modulo
        $aula2->modulo()->associate($modulo2);
        $aula2->save();



    }
}
