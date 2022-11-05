<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '-1');
        DB::unprepared(file_get_contents(__dir__ . '/source/setup.sql'));
    }
}
