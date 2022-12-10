<?php

namespace App\Controllers\Modules;

class TwoColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
