<?php

return [
    'name' => 'Сотрудники',
    'description' => 'Система управления персоналом',
    'author' => 'Ya-mobile',
    'member' => [
        'name' => 'Сотрудники',
        'pages' => [
            'index' => [
                'title' => 'Сотрудники',
                'breadcrumb' => 'Сотрудники',
            ],
            'preview' => [
                'title' => 'Просмотр сотрудника',
                'breadcrumb' => 'Просмотр сотрудника',
            ],
            'create' => [
                'title' => 'Добавление сотрудника',
                'breadcrumb' => 'Добавление сотрудника',
            ],
            'update' => [
                'title' => 'Обновление сотрудника',
                'breadcrumb' => 'Обновление сотрудника',
            ],
            'reorder' => [
                'title' => 'Сортировка сотрудников',
                'breadcrumb' => 'Сортировка сотрудников',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Имя',
                'comment' => 'Полное имя сотрудника',
                'placeholder' => 'Имя Фамилия',
            ],
            'photo' => [
                'label' => 'Фото',
                'comment' => 'Фото сотрудника',
            ],
            'description' => [
                'label' => 'Описание',
                'comment' => 'Краткое описание сотрудника',
                'placeholder' => 'О сотруднике',
            ],
            'content' => [
                'label' => 'Содержание',
                'comment' => 'Полные данные сотрудника',
            ],
            'slug' => [
                'label' => 'URL',
                'comment' => 'Slug параметр для страницы сотрудника',
                'placeholder' => 'name-surname',
            ],
            'meta_title' => [
                'label' => 'Title',
                'comment' => 'Используется в мета-теге title на странице категории',
                'placeholder' => 'Title страницы сотрудника',
            ],
            'meta_description' => [
                'label' => 'Description',
                'comment' => 'Используется в мета-теге description на странице категории',
                'placeholder' => 'Description  страницы сотрудника.',
            ],
            'meta_keywords' => [
                'label' => 'Keywords',
                'comment' => 'Используется в мета-теге keywords на странице категории',
                'placeholder' => 'ключевые, слова, страницы, сотрудника',
            ],
            'sort_order' => [
                'label' => 'Порядок',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
        ],
        'permissions' => [
            'tab' => 'Сотрудники',
            'access_members' => [
                'label' => 'Управление сотрудниками',
            ],
        ],
    ],
    'position' => [
        'name' => 'Должности',
        'pages' => [
            'index' => [
                'title' => 'Должности',
                'breadcrumb' => 'Должности',
            ],
            'preview' => [
                'title' => 'Просмотр должности',
                'breadcrumb' => 'Просмотр должности',
            ],
            'create' => [
                'title' => 'Добавление должности',
                'breadcrumb' => 'Добавление должности',
            ],
            'update' => [
                'title' => 'Обновление должности',
                'breadcrumb' => 'Обновление должности',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Название',
                'comment' => 'Название должности',
                'placeholder' => 'Должность',
            ],
            'created_at' => [
                'label' => 'Создано',
            ],
            'updated_at' => [
                'label' => 'Обновлено',
            ],
        ],
        'permissions' => [
            'tab' => 'Сотрудники',
            'access_positions' => [
                'label' => 'Управление должностями',
            ],
        ],
    ],
];
