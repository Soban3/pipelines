<?php

namespace Database\Seeders;

use App\Models\Pipeline;
use Illuminate\Database\Seeder;

class PipelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pipeline::updateOrCreate(['pipeline_name' => 'Backlog'], ['pipeline_name' => 'Backlog']);
        Pipeline::updateOrCreate(['pipeline_name' => 'Development'], ['pipeline_name' => 'Development']);
        Pipeline::updateOrCreate(['pipeline_name' => 'Staging'], ['pipeline_name' => 'Staging']);
        Pipeline::updateOrCreate(['pipeline_name' => 'Testing'], ['pipeline_name' => 'Testing']);
        Pipeline::updateOrCreate(['pipeline_name' => 'Reopened'], ['pipeline_name' => 'Reopened']);
        Pipeline::updateOrCreate(['pipeline_name' => 'Production'], ['pipeline_name' => 'Production']);
    }
}
