<?php
/**
 * Short codes:
 * {module_name}
 * {class_name}
 */

return [
    'conformity' => [
        '2010' => '2010:2102',
        '2011' => '2010:2102',
        '2020' => '2010:2102',
        '2031' => '2010:2102',
        '2101' => '2010:2102',
        '2102' => '2010:2102',

        '2200' => '2200',

        '2300' => '2300:2302',
        '2301' => '2300:2302',
        '2302' => '2300:2302',

        '3000' => '3000:3020',
        '3011' => '3000:3020',
        '3012' => '3000:3020',
        '3020' => '3000:3020',
    ],

    '2010:2102' => [],

    '2200' => [
        'admin' => [
            [
                '\'SSL\'',
                'true'
            ],
            [
                '$this->load->view(\'module/{module_name}.tpl\', $data)',
                '$this->load->view(\'module/{module_name}\', $data)'
            ],
        ],

        'catalog' => [
            [
                '($this->config->get(\'config_customer_price\') && $this->customer->isLogged())',
                '$this->customer->isLogged()'
            ],
            [
                '$result[\'tax_class_id\'], $this->config->get(\'config_tax\')));',
                '$result[\'tax_class_id\'], $this->config->get(\'config_tax\')), $this->session->data[\'currency\']);'
            ],
            [
                '$tax = $this->currency->format((float)$result[\'special\'] ? $result[\'special\'] : $result[\'price\']);',
                '$tax = $this->currency->format((float)$result[\'special\'] ? $result[\'special\'] : $result[\'price\'], $this->session->data[\'currency\']);'
            ],
            [
                '$this->config->get(\'config_product_description_length\')',
                '$this->config->get($this->config->get(\'config_theme\') . \'_product_description_length\')'
            ],
            [
                'if (file_exists(DIR_TEMPLATE . $this->config->get(\'config_template\') . \'/template/module/{module_name}.tpl\')) {
                    return $this->load->view($this->config->get(\'config_template\') . \'/template/module/{module_name}.tpl\', $data);
                } else {
                    return $this->load->view(\'default/template/module/{module_name}.tpl\', $data);
                }',
                'return $this->load->view(\'module/{module_name}\', $data);'
            ]
        ]
    ],

    '2300:2302' => [
        'admin' => [
            [
                '\'href\' => $this->url->link(\'extension/module\', \'token=\' . $this->session->data[\'token\'], \'SSL\')',
                '\'href\' => $this->url->link(\'extension/extension\', \'token=\' . $this->session->data[\'token\'] . \'&type=module\', true)'
            ],
            [
                '$this->response->redirect($this->url->link(\'extension/module\', \'token=\' . $this->session->data[\'token\'], \'SSL\'));',
                '$this->response->redirect($this->url->link(\'extension/extension\', \'token=\' . $this->session->data[\'token\'] . \'&type=module\', true));'
            ],
            [
                '$data[\'cancel\'] = $this->url->link(\'extension/module\', \'token=\' . $this->session->data[\'token\'], \'SSL\');',
                '$data[\'cancel\'] = $this->url->link(\'extension/extension\', \'token=\' . $this->session->data[\'token\'] . \'&type=module\', true);'
            ],
            [
                'ControllerModule{class_name}',
                'ControllerExtensionModule{class_name}'
            ],
            [
                '\'module/{module_name}\'',
                '\'extension/module/{module_name}\''
            ],
            [
                '\'SSL\'',
                'true'
            ],
            [
                '$this->language->get(\'text_module\'),',
                '$this->language->get(\'text_extension\'),'
            ],
            [
                '\'extension/module\'',
                '\'extension/extension\''
            ],
            [
                '$this->load->view(\'module/{module_name}.tpl\', $data)',
                '$this->load->view(\'extension/module/{module_name}\', $data)'
            ]
        ],

        'catalog' => [
            [
                'ControllerModule{class_name}',
                'ControllerExtensionModule{class_name}'
            ],
            [
                '$result[\'tax_class_id\'], $this->config->get(\'config_tax\')));',
                '$result[\'tax_class_id\'], $this->config->get(\'config_tax\')), $this->session->data[\'currency\']);'
            ],
            [
                '$tax = $this->currency->format((float)$result[\'special\'] ? $result[\'special\'] : $result[\'price\']);',
                '$tax = $this->currency->format((float)$result[\'special\'] ? $result[\'special\'] : $result[\'price\'], $this->session->data[\'currency\']);'
            ],
            [
                '$this->config->get(\'config_product_description_length\')',
                '$this->config->get($this->config->get(\'config_theme\') . \'_product_description_length\')'
            ],
            [
                'if (file_exists(DIR_TEMPLATE . $this->config->get(\'config_template\') . \'/template/module/{module_name}.tpl\')) {
                    return $this->load->view($this->config->get(\'config_template\') . \'/template/module/{module_name}.tpl\', $data);
                } else {
                    return $this->load->view(\'default/template/module/{module_name}.tpl\', $data);
                }',
                'return $this->load->view(\'extension/module/{module_name}\', $data);'
            ]
        ]
    ],

    '3000:3020' => [
        'admin' => [
            [
                '\'href\' => $this->url->link(\'extension/module\', \'token=\' . $this->session->data[\'token\'], \'SSL\')',
                '\'href\' => $this->url->link(\'marketplace/extension\', \'user_token=\' . $this->session->data[\'user_token\'] . \'&type=module\', true)'
            ],
            [
                '$this->response->redirect($this->url->link(\'extension/module\', \'token=\' . $this->session->data[\'token\'], \'SSL\'));',
                '$this->response->redirect($this->url->link(\'marketplace/extension\', \'user_token=\' . $this->session->data[\'user_token\'] . \'&type=module\', true));'
            ],
            [
                '$data[\'cancel\'] = $this->url->link(\'extension/module\', \'token=\' . $this->session->data[\'token\'], \'SSL\');',
                '$data[\'cancel\'] = $this->url->link(\'marketplace/extension\', \'user_token=\' . $this->session->data[\'user_token\'] . \'&type=module\', true);'
            ],
            [
                '$this->load->model(\'extension/module\');',
                '$this->load->model(\'setting/module\');'
            ],
            [
                'model_extension_module',
                'model_setting_module'
            ],
            [
                '\'token=\' . $this->session->data[\'token\']',
                '\'user_token=\' . $this->session->data[\'user_token\']'
            ],
            [
                'ControllerModule{class_name}',
                'ControllerExtensionModule{class_name}'
            ],
            [
                '\'module/{module_name}\'',
                '\'extension/module/{module_name}\''
            ],
            [
                '\'SSL\'',
                'true'
            ],
            [
                '$this->language->get(\'text_module\'),',
                '$this->language->get(\'text_extension\'),'
            ],
            [
                '\'extension/module\'',
                '\'extension/extension\''
            ],
            [
                '$this->load->view(\'module/{module_name}.tpl\', $data)',
                '$this->load->view(\'extension/module/{module_name}\', $data)'
            ]
        ],

        'catalog' => [
            [
                'ControllerModule{class_name}',
                'ControllerExtensionModule{class_name}'
            ],
            [
                '$result[\'tax_class_id\'], $this->config->get(\'config_tax\')));',
                '$result[\'tax_class_id\'], $this->config->get(\'config_tax\')), $this->session->data[\'currency\']);'
            ],
            [
                '$tax = $this->currency->format((float)$result[\'special\'] ? $result[\'special\'] : $result[\'price\']);',
                '$tax = $this->currency->format((float)$result[\'special\'] ? $result[\'special\'] : $result[\'price\'], $this->session->data[\'currency\']);'
            ],
            [
                '$this->config->get(\'config_product_description_length\')',
                '$this->config->get($this->config->get(\'config_theme\') . \'_product_description_length\')'
            ],
            [
                'if (file_exists(DIR_TEMPLATE . $this->config->get(\'config_template\') . \'/template/module/{module_name}.tpl\')) {
                    return $this->load->view($this->config->get(\'config_template\') . \'/template/module/{module_name}.tpl\', $data);
                } else {
                    return $this->load->view(\'default/template/module/{module_name}.tpl\', $data);
                }',
                'return $this->load->view(\'extension/module/{module_name}\', $data);'
            ]
        ]
    ]
];