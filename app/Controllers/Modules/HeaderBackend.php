<?php

namespace App\Controllers\Modules;

class HeaderBackend
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
