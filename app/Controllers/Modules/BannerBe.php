<?php

namespace App\Controllers\Modules;

class BannerBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
