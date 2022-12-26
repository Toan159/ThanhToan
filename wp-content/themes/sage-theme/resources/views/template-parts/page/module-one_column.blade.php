<section class="module-one-column 2k:p-0 bg-bgbanner bg-cover bg-no-repeat h-[550px] mt-[-50px] "> 
    <div class="container pr-0 mr-0 2k:pr-0 2k:mr-0">
        <div class="module-one-column-row row">
            <div class="col column w-full lg:w-1/2 ">
                <div class=" text-white">
                    {!! $data->module['banner'] !!}
                </div>
    
                <div class="link">
                    <a class="btn btn-orange" href="{{ $data->module['button']->url }}" target="{{ $data->module['button']->target }}">{{ $data->module['button']->title }}</a>
                </div>
            </div>
            
            <div class="col column w-full lg:w-1/2 ">
                <img src="{{ $data->module['image']->url }}" alt="{{ $data->module['image']->alt }}">
            </div>
        </div>
    </div>
</section>
