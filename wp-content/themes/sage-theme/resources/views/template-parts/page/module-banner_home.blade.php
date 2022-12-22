<div class="container">
    {{-- <h3>Module: Banner Home</h3> --}}
    <div class="content">
        {{-- <h3>Module: Banner Home</h3> --}}
        {!! $data->module['content'] !!}
        <img src="{{ $data->module['image_1']->url }}" alt="{{ $data->module['image_1']->alt }}">
        {{-- <img src="{{ $data->module['image_2']->url }}" alt="{{ $data->module['image_2']->alt }}">
        <img src="{{ $data->module['image_3']->url }}" alt="{{ $data->module['image_3']->alt }}"> --}}
    </div>
    
</div>





<?php
// var_dump($data);