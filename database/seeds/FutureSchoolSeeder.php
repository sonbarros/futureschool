<?php

use Illuminate\Database\Seeder;
use App\database\seeds\future\TSOCursoSeeder;
use App\database\seeds\future\JCLCursoSeeder;
use App\database\seeds\future\CobolCursoSeeder;

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
            CobolCursoSeeder::class
        ]);

    }
}
