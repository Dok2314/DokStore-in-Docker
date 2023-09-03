<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Seeder;

class MarksSeeder extends Seeder
{
    protected array $marks = [
        [
            'name' => 'Audi',
            'slug' => 'audi',
        ],
        [
            'name' => 'BMW',
            'slug' => 'bmw',
        ],
        [
            'name' => 'Chevrolet',
            'slug' => 'chevrolet',
        ],
        [
            'name' => 'Hyundai',
            'slug' => 'hyundai',
        ],
        [
            'name' => 'Kia',
            'slug' => 'kia',
        ],
        [
            'name' => 'Lexus',
            'slug' => 'lexus',
        ],
        [
            'name' => 'Mazda',
            'slug' => 'mazda',
        ],
        [
            'name' => 'Mercedes-Benz',
            'slug' => 'mercedes-benz',
        ],
        [
            'name' => 'Nissan',
            'slug' => 'nissan',
        ],
        [
            'name' => 'Skoda',
            'slug' => 'skoda',
        ],
        [
            'name' => 'Toyota',
            'slug' => 'toyota',
        ],
        [
            'name' => 'Volkswagen',
            'slug' => 'volkswagen',
        ],
        [
            'name' => 'Porsche',
            'slug' => 'porsche',
        ],
        [
            'name' => 'Bentley',
            'slug' => 'bentley',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->marks as $mark)
        {
            Mark::create([
                'name' => $mark['name'],
                'slug' => $mark['slug']
            ]);
        }
    }
}
