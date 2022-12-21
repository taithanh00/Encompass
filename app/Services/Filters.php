<?php

namespace App\Services;

trait Filters
{
    public static function filterExample()
    {
        //code here
        $data  =(object)[
            'key1' => 'ok1',
            'key2' => 'ok2',
        ];
        include \App\template_path(
            \App\locate_template('partials/filters/example-filter.blade.php',$data)
        );
    }
    public static function filterDemo($input)
    {
        //code here
        // $data  =(object)[
        //     'key1' => 'ok1',
        //     'key2' => 'ok2',
        // ];
        $data = (object) $input;
        include \App\template_path(
            \App\locate_template('partials/filter/demo-item.blade.php',$data)
        );

    }
}
