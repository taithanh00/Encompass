<?php

namespace App\Controllers\Modules;

class TwoColBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
