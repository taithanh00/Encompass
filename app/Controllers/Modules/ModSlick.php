<?php

namespace App\Controllers\Modules;

class ModSlick
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
