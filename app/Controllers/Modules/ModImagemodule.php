<?php

namespace App\Controllers\Modules;

class ModImagemodule
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
