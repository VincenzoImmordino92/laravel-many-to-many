<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PtojectTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //ad ogni ciclo estraggo random un progetto e delle tecnologie e li metto in relazione
        for($i = 0; $i < 30 ; $i++){
            //estraggo un progetto random
            $project = Project::inRandomOrder()->first();
            //estraggo una tecnologia random
            $technology_id = Technology::inRandomOrder()->first()->id;

            dump($project->id);
            dump($technology_id);
            dump('--------------');
        }
    }
}
