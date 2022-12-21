<?php

namespace App\Controllers\Modules;

class ModThelatest
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
