<?php

namespace App\Controllers\Modules;

class IconBetweenBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
