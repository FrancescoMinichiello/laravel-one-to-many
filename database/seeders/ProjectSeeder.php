<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->unique->realTextBetween(5, 30);
            $newProject->author = $faker->name();
            $newProject->content = $faker->realTextBetween(350, 800);
            $newProject->save();
        }
    }
}
