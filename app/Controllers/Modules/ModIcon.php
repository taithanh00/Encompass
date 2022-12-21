<?php

namespace App\Controllers\Modules;

class ModIcon
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
