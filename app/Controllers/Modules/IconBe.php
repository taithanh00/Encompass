<?php

namespace App\Controllers\Modules;

class IconBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
