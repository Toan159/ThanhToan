@php
    // $num1 = 1;
    // $num2 = 2;
    // $num3 = $num1 + $num2;
    $class = 'h4';
@endphp

<div class="container">
    <h3>{{App::getNameModule(2)}}: Demo1 </h3>
    
    @include('partials/demo/item' , [
        // 'class' => $class,
        // 'num1' => $num1,
        // 'num2' => $num2,
        // 'num3' => $num3,
        // 'sub' => 'Hai + Hai = Bốn'
        'class' => $class,
        'num1' => $data->num1,
        'num2' => $data->num2,
        'num3' => $data->num3,
        'sub' => $data->sub
    ])
{{--         
    <div>
        <p class="h4">{{$num1}} + {{$num2}} = {{$num3}}</p>
        <p>Hai + Hai = Bốn</p>
    </div> --}}
    {{-- <h4>Alo: {{$data->alo}}</h4>
    <h5>Alo: {{$data->alo2}}</h5> --}}
</div>  