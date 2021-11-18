<?php

namespace Database\Seeders;

use App\Models\Requests;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requests::factory()->count(20)->create();
    }
}
