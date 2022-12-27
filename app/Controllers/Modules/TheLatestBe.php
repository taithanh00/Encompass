<?php

namespace App\Controllers\Modules;

class TheLatestBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
