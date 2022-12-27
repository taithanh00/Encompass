<?php

namespace App\Controllers\Modules;

class ContentCenterFirstBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
