<?php
namespace App\Controllers\Modules ; 
use App\Services\Queries;
use Illuminate\Contracts\Queue\Queue;


// class headerbe{
//     public function dataModule($module){
//         return(object)[
//             'module' => $module ,
//             'Title' => $module['title'],
//             'Desc' => $module['desc'],
//         ];
//     } 
// }

class headerbe{
    public function dataModule($module){
        return(object)[
            'module' => $module ,
            'Title' => $module['title'],
            'Desc' => $module['desc'],
        ];
    } 
}
