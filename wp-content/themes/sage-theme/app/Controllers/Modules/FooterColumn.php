<?php

namespace App\Controllers\Modules;

class FooterColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
