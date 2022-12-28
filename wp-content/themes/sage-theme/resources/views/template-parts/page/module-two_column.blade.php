<section class="module-two-column pt-100">
    <div class="container">
        <div>
            <div class="text-center">   
                {!! $data->module['heading_2'] !!}
            </div>
    
            <div class="row">
                @foreach ( $data->module['content_two'] as $item )
                <div class="content_two col w-full text-center lg:w-1/3">
                    <div class="flex items-center justify-center lg:h-36 lg:pt-0 lg:items-center lg:justify-center"><img src="{{ $item->icon->url }}" alt="{{ $item->icon->alt }}"></div>
                    
                    <div class="pt-9">{!! $item->content_2 !!}</div>
                    <div class="text-orange-200 font-bold pt-5 pb-20">
                        <a  href="{{ $item->link->url }}" target="{{ $item->link->target }}">{{ $item->link->title }} 
                            <span class="icomoon icon-chevron-right"></a>
                    </div>
                </div>     
                @endforeach
            </div>
        </div>

    </div>
</section>