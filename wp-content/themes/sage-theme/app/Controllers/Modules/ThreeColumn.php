<?php

namespace App\Controllers\Modules;

class ThreeColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
