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
    {
        $file = File::find(1);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_1tso.pdf';
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
        $file->save();

        $file = File::find(6);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/TSO_4.mkv';
        $file->save();

        $file = File::find(7);
        $file->url='http://osasconamao.com.br/CURSOS/_arquivos/aula_3tso.pdf';
        $file->save();

        $file = File::find(8);
        $file->url='';
        $file->save();

        $file = File::find(9);
        $file->url='';
        $file->save();
    }
}
