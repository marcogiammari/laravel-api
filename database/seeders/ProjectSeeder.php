<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->domainName();
            $newProject->description = $faker->paragraphs(3, true);
            $newProject->image = "placeholders/image-not-available.jpg";
            $newProject->link = $faker->url();
            $newProject->save();
        }
    }
}
