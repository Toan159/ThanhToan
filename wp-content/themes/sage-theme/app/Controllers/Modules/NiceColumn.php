<?php

namespace App\Controllers\Modules;

class NiceColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
