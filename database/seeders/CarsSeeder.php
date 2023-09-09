<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    protected array $conditions = ['used', 'new'];

    protected array $types = ['passenger', 'moto', 'freight', 'bus', 'air', 'water'];

    protected array $colors = ['black', 'red', 'green', 'white', 'blue'];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = CarModel::all();

        foreach ($models as $model) {
            Car::create([
                'model_id' => $model->id,
                'condition' => $this->conditions[rand(0, count($this->conditions) - 1)],
                'type' => 'passenger',
                'color' => $this->colors[rand(0, count($this->colors) - 1)],
                'year' => rand(2002, 2023),
                'price' => rand(5000, 250000)
            ]);
        }
    }
}
