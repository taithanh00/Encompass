<?php
namespace App\Controllers\Modules ; 
use App\Services\Queries;
use Illuminate\Contracts\Queue\Queue;

// class Example{
//     public function dataModule($module)
//     {
//         return(object)
//         [
//             'module' => $module ,
//             'exl' => $module('exl'),
//             'logo' =>get_field('ns_header_logo',ACF_OPTION),
//             'example' => $this->getExample(),

//         ];
//     }
//     protected function getExample()
//     {
//         return Queries::testExample();
//     }
// }
class demo2{
    public function dataModule($module){
        // return(object)[
        //     'module' => $module 
        // ];
        return(object)[
            'module' => $module ,
            // 'Title' => $module['title'],
            // 'Desc' => $module['desc'],
            'num1' => 2 ,
            'num2' => 2  ,
            'num3' => 2+2,
            'sub' => 'Hai + Hai = Bon'
        ];
    } 
}
?>