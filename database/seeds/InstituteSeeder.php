<?php

use Illuminate\Database\Seeder;
use App\InstituteMaster;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstituteMaster::create(
            [
                'Institute_code' => '1001',
                'Institute_name' => 'barch'
            ]
        );
        InstituteMaster::create(
            [
                'Institute_code' => '2001',
                'Institute_name' => 'ica'
            ]
        );
    }
}
