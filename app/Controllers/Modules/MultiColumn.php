<?php

namespace App\Controllers\Modules;

class MultiColumn
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
