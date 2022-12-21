<?php

namespace App\Controllers\Modules;

class ModIconbetween
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
