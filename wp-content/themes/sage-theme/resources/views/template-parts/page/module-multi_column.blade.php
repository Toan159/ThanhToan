@php
    // var_dump($data->module);die;
@endphp
<section class="module-two-column">
    <div class="container">
        <div class="row">
            @foreach ( $data->module['content'] as $item )
            <div class="col w-full  xl:w-1/3 ">
                <div class="pr-20">
                    <img class="mb-10 md:mb-20"  src="{{ $item->icon->url }}" alt="{{ $item->icon->alt }}" >
                    {!! $item->content_1 !!}
                    <a href="{{ $item->link->url }}" target="{{ $item->link->target }}">{{ $item->link->title }}</a>
                </div>     
            </div>
            @endforeach
        </div>
    </div>
</section>
