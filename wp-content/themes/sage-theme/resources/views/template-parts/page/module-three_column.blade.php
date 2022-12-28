<section class="module-three-column">
    <div class="container ">
        <div class="row ">
            <div class="lg:w-1/2">
                <img src="{{ $data->module['image_3']->url }}" alt="{{ $data->module['image_3']->alt }}">
            </div>
            <div class="content_three mx-60 mt-22 lg:w-1/2 lg:m-0 lg:pl-25">
                {!! $data->module['content_three'] !!}
                <div class="hidden 2xl:block 2k:block">
                    <a class="btn btn-orange"  href="{{ $data->module['button']->url }}" target="{{ $data->module['button']->target }}">
                        {{ $data->module['button']->title }}</a>
                </div>
            </div>
        </div>
    </div>
</section>