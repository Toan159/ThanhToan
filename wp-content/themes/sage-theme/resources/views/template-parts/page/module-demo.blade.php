@php
    // $num1 = 1;
    // $num2 = 2;
    // $num3 = $num1 + $num2;
    $class = 'h2';
@endphp

<div class="container">
    <h3>{{App::getNameModule(1)}}: Demo </h3>

    @include('partials/demo/item' , [
        'class' => $class,
        'num1' => $data->num1,
        'num2' => $data->num2,
        'num3' => $data->num3,
        'sub' => $data->sub
    ])
        

    
    {{-- <h4>Title: {{$data->title}}</h4>
    <h5>Title: {{$data->desc}}</h5> --}}
</div>  