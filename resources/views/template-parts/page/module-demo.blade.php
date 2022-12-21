<?php
// $num1 = 1 ;
// $num2 = 2 ;
// $num3 = $num1 + $num2 ;
$class = 'h2';
?>
<div class="container">
    {{-- <!-- <h3>Module:Demo1</h3> -->
    <!-- <h4>Title:{{$data->Title}}</h4>
    <h5>Title:{{$data->Desc}}</h5> --> --}}
    <h3>{{ App::getNameModule(1) }}:Demo1</h3>
    {{-- <!-- <div>
        <p {{$class}}> {{$num1}} + {{$num2}} = {{$num3}}</p>
        <p>Mot + Mot = Hai</p>
    </div> --> --}}
    {{-- @include('partials/demo/item',[
        'class' => $class ,
        'num1' => $data->num1 ,
        'num2' => $data->num2 ,
        'num3' => $data->num3 ,
        'sub' => $data->sub
    ]) --}}
    {{ Page::filterDemo([
        'class' => $class,
        'num1' => $data->num1,
        'num2' => $data->num2,
        'num3' => $data->num3,
        'sub' => $data->sub,
    ]) }}
</div>
