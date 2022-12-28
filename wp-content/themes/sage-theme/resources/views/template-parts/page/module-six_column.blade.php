<section class="module-six-column bg-gray-300 lg:px-50 xl:px-50 pb-50 pt-49">
    <div class="container">
       
        <div class="xl:hidden">{!! $data->module['content_six'] !!}</div>
        <div class="row">
            <div class="col lg:w-1/2">
                <div class="hidden xl:block">{!! $data->module['content_six'] !!}</div>
                {!! $data->module['text'] !!}
            </div>
            <div class="col lg:w-1/2">
                <div class="row ">
                    @foreach ($data->module['image'] as $item)
                        <div class="col w-1/2 h-50 flex items-center justify-center lg:w-1/2 xl:h-80 2xl:h-55">
                            <img src="{{ $item->image_content->url }}" alt="{{ $item->image_content->alt }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
