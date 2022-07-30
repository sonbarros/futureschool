<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Icon;

class JCLCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jclCurso = Curso::create([
            'name'=>'JCL'
        ]); // Criando curso

        $jclCurso->setHoursClasses(0, 40);
        $jclCurso->number_classes = 4;
        $jclCurso->save();

        //criando aula1
        $aula1 = $jclCurso->aulas()->create([
            'name'=>'Primeira aula de JCL',
            'description'=>'Nesta aula você aprenderá (na prática) os principais comandos de JCL:   
            JOB, EXEC, DD, Account, Region, Class, Cond, Region, Joblib e mais.'
        ]);

        $file1_aula1 = $aula1->files()->create([
            'description'=>'Primeira aula de JCL'
        ]); // anexando arquivo

        $file1_aula1->icon()->associate(Icon::find(1));
        $file1_aula1->save();

        $file2_aula1 = $aula1->files()->create([
            'description'=>'Introdução ao JCL 1-1'
        ]); // anexando arquivo

        $file2_aula1->icon()->associate(Icon::find(2));
        $file2_aula1->save();

        $file3_aula1 = $aula1->files()->create([
            'description'=>'Introdução ao JCL 1-2'
        ]); // anexando arquivo

        $file3_aula1->icon()->associate(Icon::find(2));
        $file3_aula1->save();

        $modulo1 = $jclCurso->modulos()->create(); // Cria modulo
        $aula1->modulo()->associate($modulo1);
        $aula1->save();

        //criando aula2
        $aula2 = $jclCurso->aulas()->create([
            'name'=>'Segunda aula de JCL',
            'description'=>'Nesta aula você aprenderá (na prática) alguns utilitários do JCL.'
        ]);

        $file1_aula2 = $aula2->files()->create([
            'description'=>'Segunda aula de JCL'
        ]);

        $file1_aula2->icon()->associate(Icon::find(2));
        $file1_aula2->save();

        $file2_aula2 = $aula2->files()->create([
            'description'=>'Introdução ao JCL 2-1'
        ]);

        $file2_aula2->icon()->associate(Icon::find(2));
        $file2_aula2->save();

        $file3_aula2 = $aula2->files()->create([
            'description'=>'Introdução ao JCL 2-2'
        ]);

        $file3_aula2->icon()->associate(Icon::find(2));
        $file3_aula2->save();

        $modulo2 = $jclCurso->modulos()->create(); // Cria modulo
        $aula2->modulo()->associate($modulo2);
        $aula2->save();

        //criando aula3
        $aula3 = $jclCurso->aulas()->create([
            'name'=>'Terceira aula de JCL',
            'description'=>'Nesta aula você aprenderá (na prática) alguns utilitários do JCL.'
        ]);

        $file1_aula3 = $aula3->files()->create([
            'description'=>'Terceira aula de JCL'
        ]);

        $file1_aula3->icon()->associate(Icon::find(1));
        $file1_aula3->save();

        $file2_aula3 = $aula3->files()->create([
            'description'=>'Introdução ao JCL 3-1'
        ]);

        $file2_aula3->icon()->associate(Icon::find(2));
        $file2_aula3->save();

        $modulo3 = $jclCurso->modulos()->create(); // Cria modulo
        $aula3->modulo()->associate($modulo3);
        $aula3->save();

        //criando aula4
        $aula4 = $jclCurso->aulas()->create([
            'name'=>'Quarta aula de JCL',
            'description'=>'Nesta aula você verá o utilitário DSORT.'
        ]);

        $file1_aula4 = $aula4->files()->create([
            'description'=>'Quarta aula de JCL'
        ]);

        $file1_aula4->icon()->associate(Icon::find(1));
        $file1_aula4->save();

        $file2_aula4 = $aula4->files()->create([
            'description'=>'Introdução ao JCL 4-1'
        ]);

        $file2_aula4->icon()->associate(Icon::find(2));
        $file2_aula4->save();

        $modulo4 = $jclCurso->modulos()->create(); // Cria modulo
        $aula4->modulo()->associate($modulo4);
        $aula4->save();

    }
}
