<?php

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoTagTesteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Quando Criar Quantidade de aulas ou atualizar 
         * é necessario criar ou atualizar a infoTag
         */
        //$cursos = Curso::all();

        $curso = Curso::where('name', 'tso')->first();
        $curso->number_classes = 50;
        $curso->save();
        //dd($cursos);
        //Curso::create(['name'=>'Cobol Teste', 'number_classes'=> 1]); // deu certo
        //$curso = new Curso();
        //$curso->name = "DB2";
        //$curso->save();

        //$curso = Curso::find(1);
        //$curso->name = 'DB2';
        //$curso->save();

        //Curso::where('id', 1)->update(['number_classes'=>1]);




    }
}
