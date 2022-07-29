<?php

use Illuminate\Database\Seeder;
use App\Models\Curso;

class TesteSeeder extends Seeder
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

        //$horas = .5;

        //$horaInteger = (int) $horas;
        //dd($horaInteger);

        $curso = Curso::where('name','TSO')->first();
        $curso->setHoursClasses(1, 1);
        //dd($curso);
        $curso->save();


        //$curso = Curso::where('name', 'tso')->first();
        $curso->number_classes = 0;
        
        //Curso::create(['name'=>'Cobol Teste', 'number_classes'=> 1]); // deu certo
        //$curso = new Curso();
        //$curso->name = "DB2";
        $curso->save();
        dd($curso);
        //$curso = Curso::find(1);
        //$curso->name = 'DB2';
        //$curso->save();

        //Curso::where('id', 1)->update(['number_classes'=>1]);




    }
}
