<?php

namespace App\Controllers\Modules;

class ModInfotopfooter
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
