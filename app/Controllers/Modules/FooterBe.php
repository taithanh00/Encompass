<?php

namespace App\Controllers\Modules;

class FooterBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
