<?php

namespace App\Controllers\Modules;

// use App\Services\Queries;

class Demo1  
{
    public function dataModule($module)
    {
        return (object) [
            // 'module' => $module,
            // 'title' => $module['title'],
            // 'desc' => $module['desc']
            'num1' => 2,
            'num2' => 2,  
            'num3' => 2 + 2,
            'sub' => 'Hai + Hai  = Hai'
        ];
    }
}
