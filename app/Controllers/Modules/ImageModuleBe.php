<?php

namespace App\Controllers\Modules;

class ImageModuleBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
