<?php
return [
    'conformity' => [
        '2010' => '2010:2102',
        '2011' => '2010:2102',
        '2020' => '2010:2102',
        '2031' => '2010:2102',
        '2101' => '2010:2102',
        '2102' => '2010:2102',

        '2200' => '2200',

        '2300' => '2300:3020',
        '2301' => '2300:3020',
        '2302' => '2300:3020',
        '3000' => '2300:3020',
        '3011' => '2300:3020',
        '3012' => '2300:3020',
        '3020' => '2300:3020',
    ],

    '2010:2102' => [
        'admin' => [
            'controller' => 'admin/controller/module/',
            'model' => 'admin/model/module/',
            'view' => 'admin/view/template/module/',
            'language_ru' => 'admin/language/russian/module/',
            'language_en' => 'admin/language/russian/module/',
            'css' => 'admin/view/stylesheet/',
            'js' => 'admin/view/javascript/',
        ],

        'catalog' => [
            'controller' => 'catalog/controller/module/',
            'model' => 'catalog/model/module/',
            'view' => 'catalog/view/theme/default/template/module/',
            'language_ru' => 'admin/language/russian/module/',
            'language_en' => 'admin/language/russian/module/',
            'css' => 'catalog/view/stylesheet/',
            'js' => 'catalog/view/theme/default/javascript/',
        ]
    ],

    '2200' => [
        'admin' => [
            'controller' => 'admin/controller/module/',
            'model' => 'admin/model/module/',
            'view' => 'admin/view/template/module/',
            'language_ru' => 'admin/language/ru-ru/module/',
            'language_en' => 'admin/language/en-gb/module/',
            'css' => 'admin/view/stylesheet/',
            'js' => 'admin/view/javascript/',
        ],

        'catalog' => [
            'controller' => 'catalog/controller/module/',
            'model' => 'catalog/model/module/',
            'view' => 'catalog/view/theme/default/template/module/',
            'language_ru' => 'admin/language/ru-ru/module/',
            'language_en' => 'admin/language/en-gb/module/',
            'css' => 'catalog/view/stylesheet/',
            'js' => 'catalog/view/theme/default/javascript/',
        ]
    ],

    '2300:3020' => [
        'admin' => [
            'controller' => 'admin/controller/extension/module/',
            'model' => 'admin/model/extension/module/',
            'view' => 'admin/view/template/extension/module/',
            'language_ru' => 'admin/language/ru-ru/module/',
            'language_en' => 'admin/language/en-gb/module/',
            'css' => 'admin/view/stylesheet/',
            'js' => 'admin/view/javascript/',
        ],

        'catalog' => [
            'controller' => 'catalog/controller/extension/module/',
            'model' => 'catalog/model/extension/module/',
            'view' => 'catalog/view/theme/default/template/extension/module/',
            'language_ru' => 'admin/language/ru-ru/module/',
            'language_en' => 'admin/language/en-gb/module/',
            'css' => 'catalog/view/stylesheet/',
            'js' => 'catalog/view/theme/default/javascript/',
        ]
    ]
];