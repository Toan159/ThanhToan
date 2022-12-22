<div class="container">
    {{-- <h3>Module: Multi Column</h3> --}}
    @foreach ( $data->module['content'] as $item )
       <img  src="{{ $item->icon->url }}" alt="" >
       {{-- {{ $item->content}} --}}
       <div class="content">
        {{-- <h3>Module: Banner Home</h3> --}}
        {!! $data->module['content'] !!}
    </div>
       <a href="{{ $item->link->url }}" target="{{ $item->link->target }}">{{ $item->link->title }}</a>
    @endforeach
</div>
<?php
// var_dump($data->module['content']);