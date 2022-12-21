<?php

namespace App\Controllers\Modules;

// use App\Services\Queries;

class Demo  
{
    public function dataModule($module)
    {
        return (object) [
            // 'module' => $module,
            // 'title' => $module['title'],
            // 'desc' => $module['desc']
            'num1' => 1,
            'num2' => 2,  
            'num3' => 1 + 2,
            'sub' => 'Một + Một = Hai'
        ];
    }
}
