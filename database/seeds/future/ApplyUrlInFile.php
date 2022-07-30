<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Icon;
use App\Models\Aula;
use App\Models\File;

class ApplyUrlInFile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   // tso
        $file = File::find(1);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_1tso.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(2);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_1.mkv';
        $file->save();

        $file = File::find(3);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_2.mkv';
        $file->save();

        $file = File::find(4);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_3.mkv';
        $file->save();

        $file = File::find(5);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_2tso.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(6);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_4.mkv';
        $file->save();

        $file = File::find(7);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_3tso.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(8);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_5.mkv';
        $file->save();

        $file = File::find(9);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_6.mkv';
        $file->save();

        $file = File::find(10);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_4tso.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(11);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_7.mkv';
        $file->save();

        $file = File::find(12);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Dicas_Cob.mkv';
        $file->save();

        // jcl

        $file = File::find(13);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_1jcl.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(14);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/JCL_1.mkv';
        $file->save();

        $file = File::find(15);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/JCL_2.mkv';
        $file->save();

        $file = File::find(16);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_1jcl.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(17);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/JCL_2_1.mkv';
        $file->save();

        $file = File::find(18);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/JCL_2_2.mkv';
        $file->save();

        $file = File::find(19);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_3jcl.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(20);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/JCL_3_1.mkv';
        $file->save();

        $file = File::find(21);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_4jcl.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(22);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/JCL_4_1.mkv';
        $file->save();

        // cobol

        $file = File::find(23);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Logica_1.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(24);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Fluxograma.mkv';
        $file->save();

        $file = File::find(25);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Res_Exe_1.mkv';
        $file->save();

        $file = File::find(26);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Binario.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(27);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Binario.mkv';
        $file->save();

        $file = File::find(28);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Logica_2.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(29);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Logica_2.mkv';
        $file->save();

        $file = File::find(30);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Cobol_1.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(31);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Cobol_1.mkv';
        $file->save();

        $file = File::find(32);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Introducao_COBOL.zip';
        $file->save();

        $file = File::find(33);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Intro_1.mkv';
        $file->save();

        // last section

        $file = File::find(34);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/exercicios_1.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(35);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer01_1.mkv';
        $file->save();

        $file = File::find(36);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer01_2.mkv';
        $file->save();

        $file = File::find(37);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer01_3.mkv';
        $file->save();

        $file = File::find(38);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer02_1.mkv';
        $file->save();

        $file = File::find(39);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer02_2.mkv';
        $file->save();

        $file = File::find(40);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer03_1.mkv';
        $file->save();

        $file = File::find(41);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer04_1.mkv';
        $file->save();

        $file = File::find(42);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer05_1.mkv';
        $file->save();

        $file = File::find(43);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer05_2.mkv';
        $file->save();

        $file = File::find(44);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer06_1.mkv';
        $file->save();

        $file = File::find(45);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exer07_1.mkv';
        $file->save();

        $file = File::find(46);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Exercicios_2.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        // Cics
        $file = File::find(47);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Definicoes.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(48);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Ambi.mkv';
        $file->save();

        $file = File::find(49);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Mapa_1.mkv';
        $file->save();

        $file = File::find(50);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_M.mkv';
        $file->save();

        $file = File::find(51);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_I.mkv';
        $file->save();

        $file = File::find(52);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_C.mkv';
        $file->save();

        $file = File::find(53);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_A.mkv';
        $file->save();

        $file = File::find(54);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_E.mkv';
        $file->save();

        $file = File::find(55);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_R1.mkv';
        $file->save();

        $file = File::find(56);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_R2.mkv';
        $file->save();

        $file = File::find(57);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/CICS_Prog_R3.mkv';
        $file->save();

        $file = File::find(58);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Repro_1.mkv';
        $file->save();

        // last section cics
        $file = File::find(59);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/cics2.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(60);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/Revisao.mkv';
        $file->save();

        // DB2

        $file = File::find(61);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Geral.pdf';
        $file->icon()->associate(Icon::find(3));
        $file->save();

        $file = File::find(62);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Menu.mkv';
        $file->save();

        $file = File::find(63);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Incl_1.mkv';
        $file->save();

        $file = File::find(64);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Incl_2.mkv';
        $file->save();

        $file = File::find(65);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Cons_1.mkv';
        $file->save();

        $file = File::find(66);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Alter_1.mkv';
        $file->save();

        $file = File::find(67);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Excl_1.mkv';
        $file->save();

        $file = File::find(68);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/DB2_Batch.mkv';
        $file->save();


    }
}
