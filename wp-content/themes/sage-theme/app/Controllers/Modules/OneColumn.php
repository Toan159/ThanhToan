<?php

namespace App\Controllers\Modules;

class OneColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
