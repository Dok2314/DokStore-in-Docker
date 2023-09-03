<?php

namespace Database\Seeders;

use App\Models\CarModel;
use App\Models\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    protected array $models = [
        //AUDI
        [
            'name' => 'A3',
            'slug' => 'a3',
        ],
        [
            'name' => 'A4',
            'slug' => 'a4',
        ],
        [
            'name' => 'A4 Allroad',
            'slug' => 'a4-allroad',
        ],
        [
            'name' => 'A5',
            'slug' => 'a5',
        ],
        [
            'name' => 'A6',
            'slug' => 'a6',
        ],
        [
            'name' => 'A6 Allroad',
            'slug' => 'a6-allroad',
        ],
        [
            'name' => 'A7 Sportback',
            'slug' => 'a7-sportback',
        ],
        [
            'name' => 'A8',
            'slug' => 'a8',
        ],
        [
            'name' => 'Q3',
            'slug' => 'q3',
        ],
        [
            'name' => 'Q5',
            'slug' => 'q5',
        ],
        [
            'name' => 'Q7',
            'slug' => 'q7',
        ],
        [
            'name' => 'Q8',
            'slug' => 'q8',
        ],
        [
            'name' => 'RS6',
            'slug' => 'rs6',
        ],
        [
            'name' => 'RS7',
            'slug' => 'rs7',
        ],
        [
            'name' => 'TT',
            'slug' => 'tt',
        ],
        [
            'name' => 'SQ5',
            'slug' => 'sq5',
        ],
        [
            'name' => 'SQ7',
            'slug' => 'sq7',
        ],


        //BMW
        [
            'name' => 'X6',
            'slug' => 'x6',
        ],
        [
            'name' => 'X3',
            'slug' => 'x3',
        ],
        [
            'name' => 'X5',
            'slug' => 'x5',
        ],
        [
            'name' => 'X5M',
            'slug' => 'x5m',
        ],
        [
            'name' => 'X6M',
            'slug' => 'x6m',
        ],
        [
            'name' => 'X7',
            'slug' => 'x7',
        ],
        [
            'name' => 'M5',
            'slug' => 'm5',
        ],
        [
            'name' => 'M4',
            'slug' => 'm4',
        ],


        //Chevrolet
        [
            'name' => 'Camaro',
            'slug' => 'camaro',
        ],
        [
            'name' => 'Aveo',
            'slug' => 'aveo',
        ],
        [
            'name' => 'Cruze',
            'slug' => 'cruze',
        ],
        [
            'name' => 'Lacetti',
            'slug' => 'lacetti',
        ],
        [
            'name' => 'Orlando',
            'slug' => 'orlando',
        ],


        //Hyundai
        [
            'name' => 'Kona',
            'slug' => 'kona',
        ],
        [
            'name' => 'Palisade',
            'slug' => 'palisade',
        ],
        [
            'name' => 'Sonata',
            'slug' => 'sonata',
        ],


        //Kia
        [
            'name' => 'Rio',
            'slug' => 'rio',
        ],
        [
            'name' => 'Sportage',
            'slug' => 'sportage',
        ],
        [
            'name' => 'Stinger',
            'slug' => 'stinger',
        ],
        [
            'name' => 'K5',
            'slug' => 'k5',
        ],

        //Lexus
        [
            'name' => 'LC',
            'slug' => 'lc',
        ],
        [
            'name' => 'CT',
            'slug' => 'ct',
        ],
        [
            'name' => 'HS',
            'slug' => 'hs',
        ],
        [
            'name' => 'SC',
            'slug' => 'sc',
        ],
        [
            'name' => 'LS',
            'slug' => 'ls',
        ],
        [
            'name' => 'LX',
            'slug' => 'lx',
        ],
        [
            'name' => 'NX',
            'slug' => 'nx',
        ],
        [
            'name' => 'RC',
            'slug' => 'rc',
        ],

        //Mazda
        [
            'name' => 'CX-3',
            'slug' => 'cx-3',
        ],
        [
            'name' => 'CX-30',
            'slug' => 'cx-30',
        ],
        [
            'name' => 'MPV',
            'slug' => 'mpv',
        ],
        [
            'name' => 'Premacy',
            'slug' => 'premacy',
        ],


        //Mercedes-Benz
        [
            'name' => 'A-Class',
            'slug' => 'a-class',
        ],
        [
            'name' => 'B-Class',
            'slug' => 'b-class',
        ],
        [
            'name' => 'C-Class',
            'slug' => 'c-class',
        ],
        [
            'name' => 'CL-Class',
            'slug' => 'cl-class',
        ],
        [
            'name' => 'CLA-Class',
            'slug' => 'cla-class',
        ],
        [
            'name' => 'CLK-Class',
            'slug' => 'clk-class',
        ],
        [
            'name' => 'E-Class',
            'slug' => 'e-class',
        ],
        [
            'name' => 'GL-Class',
            'slug' => 'gl-class',
        ],
        [
            'name' => 'GLE-Class',
            'slug' => 'gle-class',
        ],
        [
            'name' => 'V-Class',
            'slug' => 'v-class',
        ],
        [
            'name' => 'S-Class',
            'slug' => 's-class',
        ],

        //Nissan
        [
            'name' => 'Almera',
            'slug' => 'almera',
        ],
        [
            'name' => 'Juke',
            'slug' => 'juke',
        ],
        [
            'name' => 'Leaf',
            'slug' => 'leaf',
        ],
        [
            'name' => 'Navara',
            'slug' => 'navara',
        ],
        [
            'name' => 'GT-R',
            'slug' => 'gt-r',
        ],
        [
            'name' => 'Teana',
            'slug' => 'teana',
        ],


        //Skoda
        [
            'name' => 'Kamiq',
            'slug' => 'kamiq',
        ],
        [
            'name' => 'Octavia',
            'slug' => 'octavia',
        ],


        //Toyota
        [
            'name' => 'RAV4',
            'slug' => 'rav4',
        ],
        [
            'name' => 'Sequoia',
            'slug' => 'sequoia',
        ],
        [
            'name' => 'Prius v',
            'slug' => 'prius-v',
        ],
        [
            'name' => 'Yaris',
            'slug' => 'yaris',
        ],
        [
            'name' => 'Corolla',
            'slug' => 'corolla',
        ],
        [
            'name' => 'Camry',
            'slug' => 'camry',
        ],

        //Volkswagen
        [
            'name' => 'Golf',
            'slug' => 'golf',
        ],
        [
            'name' => 'Passat CC',
            'slug' => 'passat-cc',
        ],

        [
            'name' => 'Atlas',
            'slug' => 'atlas',
        ],
        [
            'name' => 'Jetta',
            'slug' => 'jetta',
        ],

        [
            'name' => 'Multivan',
            'slug' => 'multivan',
        ],
        [
            'name' => 'Polo',
            'slug' => 'polo',
        ],

        [
            'name' => 'Tiguan',
            'slug' => 'tiguan',
        ],
        [
            'name' => 'Touran',
            'slug' => 'touran',
        ],
        [
            'name' => 'Touarge',
            'slug' => 'touarge',
        ],

        //Porsche
        [
            'name' => '924',
            'slug' => '924',
        ],
        [
            'name' => 'Cayenne',
            'slug' => 'cayenne',
        ],
        [
            'name' => 'Cayman',
            'slug' => 'cayman',
        ],
        [
            'name' => 'Taycan',
            'slug' => 'taycan',
        ],
        [
            'name' => 'Macan',
            'slug' => 'macan',
        ],

        //Bentley
        [
            'name' => 'Bentayga',
            'slug' => 'bentayga',
        ],
        [
            'name' => 'Continental',
            'slug' => 'continental',
        ],
        [
            'name' => 'Continental GT',
            'slug' => 'continental-gt',
        ],
        [
            'name' => 'Arnage',
            'slug' => 'arnage',
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->models as $model)
        {
            CarModel::create([
                'name' => $model['name'],
                'slug' => $model['slug'],
            ]);
        }
    }
}
