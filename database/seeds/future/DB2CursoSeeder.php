<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use app\Models\Icon;

class DB2CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = Curso::create([
            'name'=>'DB2'
        ]); // Criando curso

        $curso->setHoursClasses(0, 40);
        $curso->number_classes = 2;
        $curso->save();

        $aula1 = $curso->aulas()->create([
            'name'=>'Aulas de DB2',
            'description'=>'Nesta aula faremos um projeto completo utilizando tabela do DB2..'
        ]);

        $file1_aula1 = $aula1->files()->create([
            'description'=>'Apostila'
        ]); // anexando arquivo

        $file1_aula1->icon()->associate(Icon::find(1));
        $file1_aula1->save();

        $file2_aula1 = $aula1->files()->create([
            'description'=>'Menu'
        ]); // anexando arquivo

        $file2_aula1->icon()->associate(Icon::find(2));
        $file2_aula1->save();

        $file3_aula1 = $aula1->files()->create([
            'description'=>'Incl_1'
        ]); // anexando arquivo

        $file3_aula1->icon()->associate(Icon::find(2));
        $file3_aula1->save();

        $file4_aula1 = $aula1->files()->create([
            'description'=>'Incl_2'
        ]); // anexando arquivo

        $file4_aula1->icon()->associate(Icon::find(2));
        $file4_aula1->save();

        $file5_aula1 = $aula1->files()->create([
            'description'=>'Consul'
        ]); // anexando arquivo

        $file5_aula1->icon()->associate(Icon::find(2));
        $file5_aula1->save();

        $file6_aula1 = $aula1->files()->create([
            'description'=>'Altera'
        ]); // anexando arquivo

        $file6_aula1->icon()->associate(Icon::find(2));
        $file6_aula1->save();

        $file7_aula1 = $aula1->files()->create([
            'description'=>'Exclui'
        ]); // anexando arquivo

        $file7_aula1->icon()->associate(Icon::find(2));
        $file7_aula1->save();

        $file8_aula1 = $aula1->files()->create([
            'description'=>'Batch'
        ]); // anexando arquivo

        $file8_aula1->icon()->associate(Icon::find(2));
        $file8_aula1->save();

        $modulo1 = $curso->modulos()->create(); // Cria modulo
        $aula1->modulo()->associate($modulo1);
        $aula1->save();


    }
}
