<?php

namespace App\Controllers\Modules;

class SixColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
