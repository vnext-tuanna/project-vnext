<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Requests::factory()->count(20)->create();
    }
}
