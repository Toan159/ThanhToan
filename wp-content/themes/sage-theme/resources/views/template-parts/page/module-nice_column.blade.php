<section class="module-nice-column px-30 border-t-2 border-solid  border-gray-500">
    <div class="container pt-37">
        <div>
            <div>
                {!! $data->module['content_nice'] !!}
            </div>
    
            <div class="pt-10" >
                <div class="slick-slider-demo-module-nice-column ">
                    @foreach ($data->module['image_slick_slider'] as $item)
                        <div ><img class="h-43" src="{!! $item->image_1->url !!}" alt="{!! $item->image_1->alt !!}"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>