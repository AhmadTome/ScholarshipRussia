<?php

function _t($key,$lang = 'AR'){
    $Resource = [
        'AR' => [
            'car_num' => 'رقم المركبة'
        ],
        'HR' => [
            'car_num' => 'מספר רישוי'

        ]
    ];

    return $Resource[$lang][$key];
}

function _A(){

    return 'hi';
}
?>