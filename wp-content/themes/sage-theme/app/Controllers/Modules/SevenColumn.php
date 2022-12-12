<?php

namespace App\Controllers\Modules;

class SevenColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
