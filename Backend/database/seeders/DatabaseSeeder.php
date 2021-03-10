<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Examination;
use App\Models\Program;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Program::factory(10)->create();
        Board::factory(10)->create();
        Examination::factory(10)->create();
    }
}
