<?php

return [

    'required' => ':attribute là bắt buộc',

    'min' => [
        'array' => ':attribut là bắt buộc:min KB.',
        'file' => ':attribute nhỏ nhất 3:min.',
        'string' => ':attribute tối thiểu :min.',
    ],

    'max' => [
        'array' => ':attribute là bắt buộc :max',
        'file' => ':attribute lớn nhất là :max.',
        'string' => ':attribute tối đa là :max.',
    ],
    'same' => ':attribute va :other khong giong nhau',
    'unique' => ':attribute da ton tai.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    'attributes' => [
        'ten_danh_muc' => 'Tên danh mục',
        'name' => 'Tên',
        'password' => 'Mât khẩu',
        'cf_password' => 'Xác thực mật khẩu',
        'email' => 'Email',
    ],

];
