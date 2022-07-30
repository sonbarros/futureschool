<?php

use Illuminate\Database\Seeder;
use App\database\seeds\future\TSOCursoSeeder;
use App\database\seeds\future\JCLCursoSeeder;
use App\database\seeds\future\CobolCursoSeeder;
use App\database\seeds\future\CICSCursoSeeder;
use App\database\seeds\future\DB2CursoSeeder;
use App\database\seeds\future\MainframeCursoSeeder;
use App\database\seeds\future\ApplyUrlInFile;


class FutureSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call([
            TSOCursoSeeder::class,
            JCLCursoSeeder::class,
            CobolCursoSeeder::class,
            CICSCursoSeeder::class,
            DB2CursoSeeder::class,
            MainframeCursoSeeder::class,
            ApplyUrlInFile::class
        ]);

    }
}
