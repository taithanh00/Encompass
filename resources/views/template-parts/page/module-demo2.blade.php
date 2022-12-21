<?php
// $num1 = 1 ;
// $num2 = 2 ;
// $num3 = $num1 + $num2 ;
$class = 'h4';
?>
<div class="container">
    <!-- <h3>Module:Demo2</h3> -->
    <h3>{{ App::getNameModule(2) }}:Demo1</h3>
    {{-- <div>
    <p {{$class}}> {{$num1}} + {{$num2}} = {{$num3}}</p>
        <p>Hai + Hai = Bon</p>
    </div> --}}
    @include('partials/demo/item', [
        'class' => $class,
        'num1' => $data->num1,
        'num2' => $data->num2,
        'num3' => $data->num3,
        'sub' => $data->sub,
    ])
</div>
