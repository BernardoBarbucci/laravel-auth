<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Progetto 1',
            'description' => 'Una breve descrizione del progetto 1',
            'length' => 30,
            'duration' => '3 mesi',
            'image' => 'project1.jpg',
            'color' => 'blue',
        ]);

        Project::create([
            'title' => 'Progetto 2',
            'description' => 'Una breve descrizione del progetto 2',
            'length' => 45,
            'duration' => '2 mesi',
            'image' => 'project2.jpg',
            'color' => 'green',
        ]);
        Project::create([
            'title' => 'Progetto 3',
            'description' => 'Una breve descrizione del progetto 3',
            'length' => 60,
            'duration' => '5 mesi',
            'image' => 'project3.jpg',
            'color' => 'red',
        ]);

        Project::create([
            'title' => 'Progetto 4',
            'description' => 'Una breve descrizione del progetto 4',
            'length' => 90,
            'duration' => '8 mesi',
            'image' => 'project4.jpg',
            'color' => 'yellow',
        ]);

        Project::create([
            'title' => 'Progetto 5',
            'description' => 'Una breve descrizione del progetto 5',
            'length' => 75,
            'duration' => '6 mesi',
            'image' => 'project5.jpg',
            'color' => 'purple',
        ]);

        Project::create([
            'title' => 'Progetto 6',
            'description' => 'Una breve descrizione del progetto 6',
            'length' => 120,
            'duration' => '10 mesi',
            'image' => 'project6.jpg',
            'color' => 'orange',
        ]);

        Project::create([
            'title' => 'Progetto 7',
            'description' => 'Una breve descrizione del progetto 7',
            'length' => 45,
            'duration' => '4 mesi',
            'image' => 'project7.jpg',
            'color' => 'green',
        ]);

        Project::create([
            'title' => 'Progetto 8',
            'description' => 'Una breve descrizione del progetto 8',
            'length' => 80,
            'duration' => '7 mesi',
            'image' => 'project8.jpg',
            'color' => 'blue',
        ]);

        Project::create([
            'title' => 'Progetto 9',
            'description' => 'Una breve descrizione del progetto 9',
            'length' => 55,
            'duration' => '6 mesi',
            'image' => 'project9.jpg',
            'color' => 'pink',
        ]);

        Project::create([
            'title' => 'Progetto 10',
            'description' => 'Una breve descrizione del progetto 10',
            'length' => 100,
            'duration' => '9 mesi',
            'image' => 'project10.jpg',
            'color' => 'brown',
        ]);
    }
}
