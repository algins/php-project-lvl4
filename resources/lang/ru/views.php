<?php

return [

    'auth' => [
        'login' => [
            'login' => 'Вход',
            'login_form' => [
                'email' => 'Email',
                'forgot_your_password' => 'Забыли пароль?',
                'login' => 'Войти',
                'password' => 'Пароль',
                'remember_me' => 'Запомнить меня',
            ],
        ],

        'passwords' => [
            'confirm' => [
                'confirm' => 'Подтверждение пароля',
                'confirm_before_continuing' => 'Пожалуйста, подтвердите Ваш пароль перед продолжением',
                'confirm_form' => [
                    'confirm' => 'Подтвердить пароль',
                    'forgot_your_password' => 'Забыли пароль?',
                    'password' => 'Пароль',
                ],
            ],

            'email' => [
                'reset' => 'Сброс пароля',
                'reset_form' => [
                    'email' => 'Email',
                    'reset' => 'Сбросить пароль',
                ],
            ],

            'reset' => [
                'reset' => 'Сброс пароля',
                'reset_form' => [
                    'email' => 'Email',
                    'password' => 'Пароль',
                    'password_confirmation' => 'Подтверждение',
                    'reset' => 'Сбросить пароль',
                ],
            ],
        ],

        'register' => [
            'register' => 'Регистрация',
            'register_form' => [
                'email' => 'Email',
                'name' => 'Имя',
                'password' => 'Пароль',
                'password_confirmation' => 'Подтверждение',
                'register' => 'Зарегистрировать',
            ],
        ],

        'verify' => [
            'check_your_email' => 'Прежде чем продолжить, пожалуйста, проверьте ссылку подтверждения в своей почте',
            'did_not_receive' => 'Если Вы не получили письмо',
            'verification_link_sent' => 'Ссылка на сброс пароля была отправлена на Ваш email',
            'verify' => 'Подтвердить email',
            'verify_form' => [
                'resend' => 'Нажмите здесь, чтобы запросить еще раз',
            ]
        ],
    ],

    'layouts' => [
        'app' => [
            'home' => 'Менеджер задач',
            'login' => 'Вход',
            'logout' => 'Выход',
            'register' => 'Регистрация',
            'status_destroyed' => 'Статус успешно удалён',
            'status_not_destroyed' => 'Не удалось удалить статус',
            'status_stored' => 'Статус успешно создан',
            'status_updated' => 'Статус успешно изменён',
            'statuses' => 'Статусы',
            'task_destroyed' => 'Задача успешно удалена',
            'task_not_destroyed' => 'Не удалось удалить задачу',
            'task_stored' => 'Задача успешно создана',
            'task_updated' => 'Задача успешно изменена',
            'tasks' => 'Задачи',
        ],
    ],

    'task' => [
        'create' => [
            'create_task' => 'Создать задачу',
            'store' => 'Создать',
        ],

        'edit' => [
            'edit_task' => 'Изменение задачи',
            'update' => 'Обновить',
        ],

        'form' => [
            'description' => 'Описание',
            'name' => 'Имя',
            'status' => 'Статус',
            'assignee' => 'Исполнитель',
        ],

        'index' => [
            'actions' => 'Действия',
            'assignee' => 'Исполнитель',
            'confirm_destroy' => 'Вы уверены?',
            'create_task' => 'Создать задачу',
            'created_at' => 'Дата создания',
            'creator' => 'Автор',
            'destroy' => 'Удалить',
            'edit' => 'Изменить',
            'id' => 'ID',
            'name' => 'Имя',
            'status' => 'Статус',
            'tasks' => 'Задачи',
        ],
    ],

    'task_status' => [
        'create' => [
            'create_status' => 'Создать статус',
            'store' => 'Создать',
        ],

        'edit' => [
            'edit_status' => 'Изменение статуса',
            'update' => 'Обновить',
        ],

        'form' => [
            'name' => 'Имя',
        ],

        'index' => [
            'actions' => 'Действия',
            'confirm_destroy' => 'Вы уверены?',
            'create_status' => 'Создать статус',
            'created_at' => 'Дата создания',
            'destroy' => 'Удалить',
            'edit' => 'Изменить',
            'id' => 'ID',
            'name' => 'Имя',
            'statuses' => 'Статусы',
        ],
    ],

];