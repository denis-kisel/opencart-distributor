<?php

/**
 * If format do not specify, its will create automate from format rules
 */

return [
    'module' => [
        'admin' => [
            'controller' => [
                'awesome.php',
            ],
            'view' => [
                'awesome', //Without format
            ],
            'css' => [
                'awesome.css'
            ],
            'js' => [
                'awesome.js'
            ],
            'language_ru' => [
                'awesome.php',
            ],
            'language_en' => [
                'awesome.php',
            ]
        ],

        'catalog' => [
            'controller' => [
                'awesome.php',
            ],
            'model' => [
                'awesome.php',
            ],
            'view' => [
                'awesome', //Without format
            ],
            'css' => [
                'awesome.css'
            ],
            'js' => [
                'awesome.js'
            ],
            'language_ru' => [
                'awesome.php',
            ],
            'language_en' => [
                'awesome.php',
            ],
        ]
    ],

    'oc_modification' => [
        '2010:2200' => [
            [
                //Distribute from version
                '2010',

                //File
                'admin/controller/catalog/category.php',

                //Replace rules [['search', 'replace']]
                [
                    [
                        'search', 'replace'
                    ]
                ]
            ]
        ],
    ],

    'additional_files' => [
        'all' => [
            [
                //Distribute from version
                '2010',

                //File from -> to string or array ['from' => 'to']
                'system/library/product.php',

                //Replace rules [['search', 'replace']]
                [
                    [
                        'search', 'replace'
                    ]
                ]
            ]
        ],
    ],
];