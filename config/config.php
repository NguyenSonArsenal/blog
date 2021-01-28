<?php

return [
    // System
    'del_flag_column' => ['field' => 'del_flag', 'active' => 0, 'deleted' => 1],
    'created_at_column' => ['field' => 'ins_datetime'],
    'updated_at_column' => ['field' => 'upd_datetime'],

    'gender_column' => [
        'girl' => 0,
        'boy' => 1
    ],

    'pagination' => [
        'backend' => 20,
        'frontend' => 20,
    ],

    'key_form_data_old' => '_formDataOld',

    'status_alias' => [
        'active' => "Hoạt động",
        'disable' => "Tạm khóa",
    ],
    'status' => [
        'active' => 0,
        'disable' => 1,
    ],

    'gender' => [
        'girl' => 0,
        'boy' => 1,
    ],
    'gender_alias' => [
        'girl' => "Girl",
        'boy' => "Boy",
    ],

    // BACKEND AREA

    // FRONTEND AREA
    'frontend' => [
        'homepage' => [
            'new_limit' => 3,
            'teacher_limit' => 3,
        ]
    ]
];
