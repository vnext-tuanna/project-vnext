<?php

namespace Database\Seeders;

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
                FollowSeeder::class,
                ManagerSeeder::class,
                ReportSeeder::class,
                RequestSeeder::class,
                SkillSeeder::class,
                UserSeeder::class,
             ]
         );
    }
}
