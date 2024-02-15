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
        $projects = [
            [
                'title' => 'Progetto 1',
                'description' => 'Una breve descrizione del progetto 1',
                'length' => 30,
                'duration' => '3 mesi',
                'image' => 'project1.jpg',
                'color' => 'blue',
            ],
            [
                'title' => 'Progetto 2',
                'description' => 'Una breve descrizione del progetto 2',
                'length' => 45,
                'duration' => '2 mesi',
                'image' => 'project2.jpg',
                'color' => 'green',
            ],
            [
                'title' => 'Progetto 3',
                'description' => 'Una breve descrizione del progetto 3',
                'length' => 60,
                'duration' => '5 mesi',
                'image' => 'project3.jpg',
                'color' => 'red',
            ],
            [
                'title' => 'Progetto 4',
                'description' => 'Una breve descrizione del progetto 4',
                'length' => 90,
                'duration' => '8 mesi',
                'image' => 'project4.jpg',
                'color' => 'yellow',
            ],
            [
                'title' => 'Progetto 5',
                'description' => 'Una breve descrizione del progetto 5',
                'length' => 75,
                'duration' => '6 mesi',
                'image' => 'project5.jpg',
                'color' => 'purple',
            ],
            [
                'title' => 'Progetto 6',
                'description' => 'Una breve descrizione del progetto 6',
                'length' => 120,
                'duration' => '10 mesi',
                'image' => 'project6.jpg',
                'color' => 'orange',
            ],
            [
                'title' => 'Progetto 7',
                'description' => 'Una breve descrizione del progetto 7',
                'length' => 45,
                'duration' => '4 mesi',
                'image' => 'project7.jpg',
                'color' => 'green',
            ],
            [
                'title' => 'Progetto 8',
                'description' => 'Una breve descrizione del progetto 8',
                'length' => 80,
                'duration' => '7 mesi',
                'image' => 'project8.jpg',
                'color' => 'blue',
            ],
            [
                'title' => 'Progetto 9',
                'description' => 'Una breve descrizione del progetto 9',
                'length' => 55,
                'duration' => '6 mesi',
                'image' => 'project9.jpg',
                'color' => 'pink',
            ],
            [
                'title' => 'Progetto 10',
                'description' => 'Una breve descrizione del progetto 10',
                'length' => 100,
                'duration' => '9 mesi',
                'image' => 'project10.jpg',
                'color' => 'brown',
            ],
            [
                'title' => 'Progetto 11',
                'description' => 'Una breve descrizione del progetto 11',
                'length' => 120,
                'duration' => '19 mesi',
                'image' => 'project11.jpg',
                'color' => 'yellow',
            ],
            [
                'title' => 'Progetto 12',
                'description' => 'Una breve descrizione del progetto 12',
                'length' => 100,
                'duration' => '7 mesi',
                'image' => 'project12.jpg',
                'color' => 'green',
            ],
            [
                'title' => 'Progetto 13',
                'description' => 'Una breve descrizione del progetto 13',
                'length' => 10,
                'duration' => '1 mesi',
                'image' => 'project13.jpg',
                'color' => 'brown',
            ],
            [
                'title' => 'Progetto 14',
                'description' => 'Una breve descrizione del progetto 14',
                'length' => 285,
                'duration' => '6 mesi',
                'image' => 'project14.jpg',
                'color' => 'black',
            ],
            [
                'title' => 'Progetto 15',
                'description' => 'Una breve descrizione del progetto 15',
                'length' => 180,
                'duration' => '11 mesi',
                'image' => 'project15.jpg',
                'color' => 'blue',
            ],
            [
                'title' => 'Progetto 16',
                'description' => 'Una breve descrizione del progetto 16',
                'length' => 135,
                'duration' => '6 mesi',
                'image' => 'project16.jpg',
                'color' => 'lime green',
            ],
            [
                'title' => 'Progetto 17',
                'description' => 'Una breve descrizione del progetto 17',
                'length' => 60,
                'duration' => '13 mesi',
                'image' => 'project17.jpg',
                'color' => 'red',
            ],
            [
                'title' => 'Progetto 18',
                'description' => 'Una breve descrizione del progetto 18',
                'length' => 35,
                'duration' => '9 mesi',
                'image' => 'project18.jpg',
                'color' => 'purple',
            ],
            [
                'title' => 'Progetto 19',
                'description' => 'Una breve descrizione del progetto 19',
                'length' => 45,
                'duration' => '9 mesi',
                'image' => 'project19.jpg',
                'color' => 'white',
            ],
            [
                'title' => 'Progetto 20',
                'description' => 'Una breve descrizione del progetto 20',
                'length' => 980,
                'duration' => '80 mesi',
                'image' => 'project20.jpg',
                'color' => 'green',
            ],
        ];

        Project::insert($projects);
    }
}
