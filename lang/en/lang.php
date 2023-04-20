<?php

return [
    'name' => 'Staff',
    'description' => 'Staff members managing system',
    'author' => 'Ya-mobile',
    'member' => [
        'name' => 'Staff members',
        'pages' => [
            'index' => [
                'title' => 'Staff members',
                'breadcrumb' => 'Staff members',
            ],
            'preview' => [
                'title' => 'Staff member preview',
                'breadcrumb' => 'Staff member preview',
            ],
            'create' => [
                'title' => 'Staff member add',
                'breadcrumb' => 'Staff member add',
            ],
            'update' => [
                'title' => 'Staff member update',
                'breadcrumb' => 'Staff member update',
            ],
            'reorder' => [
                'title' => 'Staff members reorder',
                'breadcrumb' => 'Staff members reorder',
            ],
        ],
        'fields' => [
            'id' => [
                'label' => 'ID',
            ],
            'name' => [
                'label' => 'Name',
                'comment' => 'Staff member full name',
                'placeholder' => 'Name Surname',
            ],
            'photo' => [
                'label' => 'Photo',
                'comment' => 'Staff member photo',
            ],
            'description' => [
                'label' => 'Description',
                'comment' => 'Short description about staff member',
                'placeholder' => 'About staff member',
            ],
            'content' => [
                'label' => 'Content',
                'comment' => 'All staff member data',
            ],
            'slug' => [
                'label' => 'URL',
                'comment' => 'Slug parameter for staff member page',
                'placeholder' => 'name-surname',
            ],
            'meta_title' => [
                'label' => 'Title',
                'comment' => 'Used in the title meta tag on the staff member page',
                'placeholder' => 'Staff member page title',
            ],
            'meta_description' => [
                'label' => 'Description',
                'comment' => 'Used in the description meta tag on the staff member page',
                'placeholder' => 'Staff member page description.',
            ],
            'meta_keywords' => [
                'label' => 'Keywords',
                'comment' => 'Used in the keywords meta tag on the staff member page',
                'placeholder' => 'staff, member, page, keywords',
            ],
            'sort_order' => [
                'label' => 'Order',
            ],
            'created_at' => [
                'label' => 'Created at',
            ],
            'updated_at' => [
                'label' => 'Updated at',
            ],
        ],
        'permissions' => [
            'tab' => 'Staff',
            'access_members' => [
                'label' => 'Staff members managing',
            ],
        ],
    ],
];
