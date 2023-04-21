<?php

namespace Yamobile\Staff;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'yamobile.staff::lang.name',
            'description' => 'yamobile.staff::lang.description',
            'author'      => 'yamobile.staff::lang.author',
            'icon'        => 'oc-icon-group',
            'homepage'    => 'https://github.com/ya-mobile-ru/oc-staff-plugin'
        ];
    }

    public function registerNavigation()
    {
        return [
            'staff' => [
                'label'       => 'yamobile.staff::lang.name',
                'url'         => Backend::url('yamobile/staff/members'),
                'icon'        => 'oc-icon-group',
                'permissions' => ['yamobile.staff.*'],
                'sideMenu' => [
                    'members' => [
                        'label'       => 'yamobile.staff::lang.member.name',
                        'icon'        => 'oc-icon-group',
                        'url'         => Backend::url('yamobile/staff/members'),
                        'permissions' => ['yamobile.staff.access_members']
                    ],
                    'positions' => [
                        'label'       => 'yamobile.staff::lang.position.name',
                        'icon'        => 'oc-icon-briefcase',
                        'url'         => Backend::url('yamobile/staff/positions'),
                        'permissions' => ['yamobile.staff.access_positions']
                    ],
                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'yamobile.staff.access_members' => [
                'tab'   => 'yamobile.staff::lang.member.permissions.tab',
                'label' => 'yamobile.staff::lang.member.permissions.access_members.label',
            ],
        ];
    }
}
