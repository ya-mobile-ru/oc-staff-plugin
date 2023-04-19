<?php

namespace Yamobile\Staff;

use System\Classes\PluginBase;

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
}
