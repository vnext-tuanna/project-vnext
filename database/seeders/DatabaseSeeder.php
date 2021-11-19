<?php

namespace Database\Seeders;

use App\Models\Requests;
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
         $this->call(
             [
                DivisionSeeder::class,
                PositionSeeder::class,
                ManagerSeeder::class,
                ReportSeeder::class,
                RequestsSeeder::class,
                SkillSeeder::class,
                UserSeeder::class,
             ]
         );
    }
}
