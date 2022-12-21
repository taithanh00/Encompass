<?php

namespace App\Controllers\Modules;

class ModInfobetweenbanner
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
