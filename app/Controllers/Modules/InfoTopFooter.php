<?php

namespace App\Controllers\Modules;

class InfoTopFooter
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
