<?php

namespace App\database\seeds\future;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\Icon;

class TSOCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $wordIcon = Icon::create([
            'name'=>'word',
            'url'=>'_img/word.webp'
        ]);
        $mediaIcon = Icon::create([
            'name'=>'media-player',
            'url'=>'_img/media-player.webp'
        ]);
        $pdfIcon = Icon::create([
            'name'=>'pdf',
            'url'=>'_img/icon-pdf.png'
        ]);

        $tn3270 = Icon::create([
            'name'=>'tn3270',
            'url'=>'_img/tn3270-removebg-preview.png'
        ]);
        
        $cursoTSO = Curso::create([
            'name' => 'TSO',
            'number_classes' => 4
        ]);
        $cursoTSO->setHoursClasses(0, 40);
        $cursoTSO->save();
        
        // ... module
        $moduloOne = $cursoTSO->modulos()->create();

        $aulaOne = $cursoTSO->aulas()->create([
            'name' => 'Primeira aula de TSO',
            'description' => 'Nesta aula você aprenderá (na prática) os principais comandos do TSO.',
        ]);

        $aulaTwo = $cursoTSO->aulas()->create([
            'name' => 'Introdução ao TCO'
        ]);
        

        $aulaOne->modulo()->associate($moduloOne);
        $aulaOne->save();

        $aulaTwo->modulo()->associate($moduloOne);
        $aulaTwo->save();

        // ... module
        $moduloTwo = $cursoTSO->modulos()->create();

        $aulaThree = $cursoTSO->aulas()->create([
            'name' => 'Segunda aula de TSO',
            'description' => 'Nesta aula você aprenderá (na prática) a criar bibliotecas e membros.'
        ]);

        $aulaFour = $cursoTSO->aulas()->create([
            'name' => 'Introdução ao TCO'
        ]);

        $aulaThree->modulo()->associate($moduloTwo);
        $aulaThree->save();

        $aulaFour->modulo()->associate($moduloTwo);
        $aulaFour->save();

        // ... module
        $moduloThree = $cursoTSO->modulos()->create();

        $aulaFive = $cursoTSO->aulas()->create([
            'name' => 'Terceira aula de TSO',
            'description' => 'Nesta aula você aprenderá (na prática) a como mudar a forma de paginar, transferir arquivos para o computador, trabalhar com mais de uma e compilar programas.'
        ]);

        $aulaSix = $cursoTSO->aulas()->create([
            'name' => 'Introdução ao TCO'
        ]);

        $aulaFive->modulo()->associate($moduloThree);
        $aulaFive->save();

        $aulaSix->modulo()->associate($moduloThree);
        $aulaSix->save();

        // ... module
        $moduloFour = $cursoTSO->modulos()->create();

        $aulaSeven = $cursoTSO->aulas()->create([
            'name' => 'Quarta aula de TSO',
            'description' => 'Nesta aula você aprenderá (na prática) alguns comandos especiais. '
        ]);

        $aulaEight = $cursoTSO->aulas()->create([
            'name' => 'Introdução ao TCO'
        ]);

        $aulaSeven->modulo()->associate($moduloFour);
        $aulaSeven->save();

        $aulaEight->modulo()->associate($moduloFour);
        $aulaEight->save();

        // files
        $aulaOneFile1 = $aulaOne->files()->create([
            'description' => '1º aula TCO'
        ]);

        $aulaOneFile1->icon()->associate($wordIcon);
        $aulaOneFile1->save();

        $aulaTwoFile1 = $aulaTwo->files()->create([
            'description' => 'Instrução ao TSO 1-1'
        ]);

        $aulaTwoFile2 = $aulaTwo->files()->create([
            'description' => 'Instrução ao TSO 1-2'
        ]);

        $aulaTwoFile3 = $aulaTwo->files()->create([
            'description' => 'Instrução ao TSO 1-3'
        ]);

        $aulaTwoFile1->icon()->associate($mediaIcon);
        $aulaTwoFile1->save();
        $aulaTwoFile2->icon()->associate($mediaIcon);
        $aulaTwoFile2->save();
        $aulaTwoFile3->icon()->associate($mediaIcon);
        $aulaTwoFile3->save();
        
        $aulaThreeFile1 = $aulaThree->files()->create([
            'description'=>'2º aula TCO'
        ]);

        $aulaThreeFile1->icon()->associate($wordIcon);
        $aulaThreeFile1->save();

        $aulaFourFile1 = $aulaFour->files()->create([
            'description'=>'Instrução ao TSO 2-1'
        ]);

        $aulaFourFile1->icon()->associate($mediaIcon);
        $aulaFourFile1->save();

        $aulaFiveFile1 = $aulaFive->files()->create([
            'description'=>'3º aula TCO'
        ]);

        $aulaFiveFile1->icon()->associate($wordIcon);
        $aulaFiveFile1->save();

        $aulasSix = $aulaSix->files()->createMany([
            ['description'=>'Instrução ao TSO 3-1'],
            ['description'=>'Instrução ao TSO 3-2'],
        ]);

        foreach($aulasSix as $aula) {
            $aula->icon()->associate($mediaIcon);
            $aula->save();
        }

        $aulaSevenFile1 = $aulaSeven->files()->create([
            'description'=>'4º aula TCO'
        ]);

        $aulaSevenFile1->icon()->associate($wordIcon);
        $aulaSevenFile1->save();

        $aulaEightFiles = $aulaEight->files()->createMany([
            ['description'=>'Instrução ao TSO 4-1'],
            ['description'=>'Instrução ao TSO 4-2']
        ]);

        foreach($aulaEightFiles as $file) {
            $file->icon()->associate($mediaIcon);
            $file->save();
        }

        // 
    }
}
