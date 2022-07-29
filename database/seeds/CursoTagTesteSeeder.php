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
        
        $str = null;

        if(isset($str)) {
            dd('entrou');
        }

        dd('não entrou');
        /**
         * Quando Criar Quantidade de aulas ou atualizar 
         * é necessario criar ou atualizar a infoTag
         */
        //$cursos = Curso::all();

        //$horas = .5;

        //$horaInteger = (int) $horas;
        //dd($horaInteger);

        //$curso = Curso::where('name','TSO')->first();
        //$curso->setHoursClasses(0, 0);
        //dd($curso);
        //$curso->save();


        //$curso = Curso::where('name', 'tso')->first();
        //$curso->number_classes = 0;
        //$curso->save();
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
