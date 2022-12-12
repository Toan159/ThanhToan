<?php

namespace App\Controllers\Modules;

class EightColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
