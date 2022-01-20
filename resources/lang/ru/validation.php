<?php

return [

    'array'  => ':attribute должно быть массивом',
    'confirmed' => ':attribute и подтверждение не совпадают',
    'email' => ':attribute должно быть действительным электронным адресом',
    'exists' => 'Выбранное значение для :attribute некорректно',
    'max' => [
        'string' => ':attribute должен иметь длину не более :max символов',
    ],
    'min' => [
        'string' => ':attribute должен иметь длину не менее :min символов',
    ],
    'required' => 'Это обязательное поле',
    'string' => ':attribute должно быть строкой',

    'custom' => [
        'email' => [
            'unique' => 'Пользователь с таким email уже существует',
        ],
        'name' => [
            'unique' => ':model с таким именем уже существует',
        ],
    ],

    'attributes' => [
        'email' => 'Email',
        'labels.*' => 'Метки',
        'name' => 'Имя',
        'password' => 'Пароль',
    ],

];
