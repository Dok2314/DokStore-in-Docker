<?php

return [
    'models' => [
        'car' => [
            'types' => [
                'passenger' => 'Пассажирский',
                'moto' => 'Мото',
                'freight' => 'Грузовой',
                'bus' => 'Автобус',
                'air' => 'Воздушный',
                'water' => 'Водный',
            ],
            'colors' => [
                'black' => 'Черный',
                'red' => 'Красный',
                'green' => 'Зеленый',
                'white' => 'Белый',
                'blue' => 'Голубой',
            ],
            'conditions' => [
                'new' => 'Новая',
                'used' => 'Б/У',
            ],
        ],
        'permission' => [
            'names' => [
                'create' => 'Создание',
                'read' => 'Редактирование',
                'update' => 'Обновление',
                'delete' => 'Удаление',
            ]
        ]
    ],
];
