<?php

return [
    'models' => [
        'car' => [
            'types' => [
                'passenger' => 'Passenger',
                'moto' => 'Moto',
                'freight' => 'Freight',
                'bus' => 'Bus',
                'air' => 'Air',
                'water' => 'Water',
            ],
            'colors' => [
                'black' => 'Black',
                'red' => 'Red',
                'green' => 'Green',
                'white' => 'White',
                'blue' => 'Blue',
            ],
            'conditions' => [
                'new' => 'New',
                'used' => 'Used',
            ],
        ],
        'permission' => [
            'names' => [
                'create' => 'Create',
                'read' => 'Read',
                'update' => 'Update',
                'delete' => 'Delete',
            ]
        ]
    ],
];
