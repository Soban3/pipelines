<?php

namespace Database\Seeders;

use App\Models\Pipeline;
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
        // \App\Models\User::factory(10)->create();
        \App\Models\Card::factory(20)->create();
        $this->call(PipelineSeeder::class);
    }
}
