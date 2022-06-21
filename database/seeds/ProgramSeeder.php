<?php

use Illuminate\Database\Seeder;
use App\ProgramMaster;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProgramMaster::create(
            [
                'Program_code' => '1001',
                'Program_name' => 'barch'
            ]
        );
        ProgramMaster::create(
            [
                'Program_code' => '2001',
                'Program_name' => 'bsc'
            ]
        );
    }
}
