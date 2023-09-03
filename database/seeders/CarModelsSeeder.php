<?php

namespace Database\Seeders;

use App\Models\CarModel;
use App\Models\Mark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelsSeeder extends Seeder
{
    protected array $models = [
        //AUDI
        [
            'name' => 'A3',
            'slug' => 'a3',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A4',
            'slug' => 'a4',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A4 Allroad',
            'slug' => 'a4-allroad',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A5',
            'slug' => 'a5',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A6',
            'slug' => 'a6',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A6 Allroad',
            'slug' => 'a6-allroad',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A7 Sportback',
            'slug' => 'a7-sportback',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'A8',
            'slug' => 'a8',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'Q3',
            'slug' => 'q3',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'Q5',
            'slug' => 'q5',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'Q7',
            'slug' => 'q7',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'Q8',
            'slug' => 'q8',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'RS6',
            'slug' => 'rs6',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'RS7',
            'slug' => 'rs7',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'TT',
            'slug' => 'tt',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'SQ5',
            'slug' => 'sq5',
            'mark_slug' => 'audi'
        ],
        [
            'name' => 'SQ7',
            'slug' => 'sq7',
            'mark_slug' => 'audi'
        ],


        //BMW
        [
            'name' => 'X6',
            'slug' => 'x6',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'X3',
            'slug' => 'x3',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'X5',
            'slug' => 'x5',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'X5M',
            'slug' => 'x5m',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'X6M',
            'slug' => 'x6m',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'X7',
            'slug' => 'x7',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'M5',
            'slug' => 'm5',
            'mark_slug' => 'bmw'
        ],
        [
            'name' => 'M4',
            'slug' => 'm4',
            'mark_slug' => 'bmw'
        ],


        //Chevrolet
        [
            'name' => 'Camaro',
            'slug' => 'camaro',
            'mark_slug' => 'chevrolet'
        ],
        [
            'name' => 'Aveo',
            'slug' => 'aveo',
            'mark_slug' => 'chevrolet'
        ],
        [
            'name' => 'Cruze',
            'slug' => 'cruze',
            'mark_slug' => 'chevrolet'
        ],
        [
            'name' => 'Lacetti',
            'slug' => 'lacetti',
            'mark_slug' => 'chevrolet'
        ],
        [
            'name' => 'Orlando',
            'slug' => 'orlando',
            'mark_slug' => 'chevrolet'
        ],


        //Hyundai
        [
            'name' => 'Kona',
            'slug' => 'kona',
            'mark_slug' => 'hyundai'
        ],
        [
            'name' => 'Palisade',
            'slug' => 'palisade',
            'mark_slug' => 'hyundai'
        ],
        [
            'name' => 'Sonata',
            'slug' => 'sonata',
            'mark_slug' => 'hyundai'
        ],


        //Kia
        [
            'name' => 'Rio',
            'slug' => 'rio',
            'mark_slug' => 'kia'
        ],
        [
            'name' => 'Sportage',
            'slug' => 'sportage',
            'mark_slug' => 'kia'
        ],
        [
            'name' => 'Stinger',
            'slug' => 'stinger',
            'mark_slug' => 'kia'
        ],
        [
            'name' => 'K5',
            'slug' => 'k5',
            'mark_slug' => 'kia'
        ],

        //Lexus
        [
            'name' => 'LC',
            'slug' => 'lc',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'CT',
            'slug' => 'ct',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'HS',
            'slug' => 'hs',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'SC',
            'slug' => 'sc',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'LS',
            'slug' => 'ls',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'LX',
            'slug' => 'lx',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'NX',
            'slug' => 'nx',
            'mark_slug' => 'lexus'
        ],
        [
            'name' => 'RC',
            'slug' => 'rc',
            'mark_slug' => 'lexus'
        ],

        //Mazda
        [
            'name' => 'CX-3',
            'slug' => 'cx-3',
            'mark_slug' => 'mazda'
        ],
        [
            'name' => 'CX-30',
            'slug' => 'cx-30',
            'mark_slug' => 'mazda'
        ],
        [
            'name' => 'MPV',
            'slug' => 'mpv',
            'mark_slug' => 'mazda'
        ],
        [
            'name' => 'Premacy',
            'slug' => 'premacy',
            'mark_slug' => 'mazda'
        ],


        //Mercedes-Benz
        [
            'name' => 'A-Class',
            'slug' => 'a-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'B-Class',
            'slug' => 'b-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'C-Class',
            'slug' => 'c-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'CL-Class',
            'slug' => 'cl-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'CLA-Class',
            'slug' => 'cla-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'CLK-Class',
            'slug' => 'clk-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'E-Class',
            'slug' => 'e-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'GL-Class',
            'slug' => 'gl-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'GLE-Class',
            'slug' => 'gle-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'V-Class',
            'slug' => 'v-class',
            'mark_slug' => 'mercedes-benz'
        ],
        [
            'name' => 'S-Class',
            'slug' => 's-class',
            'mark_slug' => 'mercedes-benz'
        ],

        //Nissan
        [
            'name' => 'Almera',
            'slug' => 'almera',
            'mark_slug' => 'nissan'
        ],
        [
            'name' => 'Juke',
            'slug' => 'juke',
            'mark_slug' => 'nissan'
        ],
        [
            'name' => 'Leaf',
            'slug' => 'leaf',
            'mark_slug' => 'nissan'
        ],
        [
            'name' => 'Navara',
            'slug' => 'navara',
            'mark_slug' => 'nissan'
        ],
        [
            'name' => 'GT-R',
            'slug' => 'gt-r',
            'mark_slug' => 'nissan'
        ],
        [
            'name' => 'Teana',
            'slug' => 'teana',
            'mark_slug' => 'nissan'
        ],


        //Skoda
        [
            'name' => 'Kamiq',
            'slug' => 'kamiq',
            'mark_slug' => 'skoda'
        ],
        [
            'name' => 'Octavia',
            'slug' => 'octavia',
            'mark_slug' => 'skoda'
        ],


        //Toyota
        [
            'name' => 'RAV4',
            'slug' => 'rav4',
            'mark_slug' => 'toyota'
        ],
        [
            'name' => 'Sequoia',
            'slug' => 'sequoia',
            'mark_slug' => 'toyota'
        ],
        [
            'name' => 'Prius v',
            'slug' => 'prius-v',
            'mark_slug' => 'toyota'
        ],
        [
            'name' => 'Yaris',
            'slug' => 'yaris',
            'mark_slug' => 'toyota'
        ],
        [
            'name' => 'Corolla',
            'slug' => 'corolla',
            'mark_slug' => 'toyota'
        ],
        [
            'name' => 'Camry',
            'slug' => 'camry',
            'mark_slug' => 'toyota'
        ],

        //Volkswagen
        [
            'name' => 'Golf',
            'slug' => 'golf',
            'mark_slug' => 'volkswagen'
        ],
        [
            'name' => 'Passat CC',
            'slug' => 'passat-cc',
            'mark_slug' => 'volkswagen'
        ],

        [
            'name' => 'Atlas',
            'slug' => 'atlas',
            'mark_slug' => 'volkswagen'
        ],
        [
            'name' => 'Jetta',
            'slug' => 'jetta',
            'mark_slug' => 'volkswagen'
        ],

        [
            'name' => 'Multivan',
            'slug' => 'multivan',
            'mark_slug' => 'volkswagen'
        ],
        [
            'name' => 'Polo',
            'slug' => 'polo',
            'mark_slug' => 'volkswagen'
        ],

        [
            'name' => 'Tiguan',
            'slug' => 'tiguan',
            'mark_slug' => 'volkswagen'
        ],
        [
            'name' => 'Touran',
            'slug' => 'touran',
            'mark_slug' => 'volkswagen'
        ],
        [
            'name' => 'Touarge',
            'slug' => 'touarge',
            'mark_slug' => 'volkswagen'
        ],

        //Porsche
        [
            'name' => '924',
            'slug' => '924',
            'mark_slug' => 'porsche'
        ],
        [
            'name' => 'Cayenne',
            'slug' => 'cayenne',
            'mark_slug' => 'porsche'
        ],
        [
            'name' => 'Cayman',
            'slug' => 'cayman',
            'mark_slug' => 'porsche'
        ],
        [
            'name' => 'Taycan',
            'slug' => 'taycan',
            'mark_slug' => 'porsche'
        ],
        [
            'name' => 'Macan',
            'slug' => 'macan',
            'mark_slug' => 'porsche'
        ],

        //Bentley
        [
            'name' => 'Bentayga',
            'slug' => 'bentayga',
            'mark_slug' => 'bentley'
        ],
        [
            'name' => 'Continental',
            'slug' => 'continental',
            'mark_slug' => 'bentley'
        ],
        [
            'name' => 'Continental GT',
            'slug' => 'continental-gt',
            'mark_slug' => 'bentley'
        ],
        [
            'name' => 'Arnage',
            'slug' => 'arnage',
            'mark_slug' => 'bentley'
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
                'mark_id' => Mark::where('slug', $model['mark_slug'])->first()->id
            ]);
        }
    }
}
