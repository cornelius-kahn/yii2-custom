<?php

return [
    'renderers' => [
        'html' => [
            'class' => 'yii\smarty\ViewRenderer',
            'compilePath' => '@runtime/smarty/compile',
            'cachePath' => '@runtime/smarty/cache',
            'options' => [
                'left_delimiter' => '<{',
                'right_delimiter' => '}>',
            ],
        ],
    ],
];
