<?php

namespace App\Controllers\Modules;

class TestimonialBe
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
