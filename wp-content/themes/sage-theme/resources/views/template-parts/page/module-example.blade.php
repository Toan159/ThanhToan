<?php 
    // var_dump($data->module['repeater']); die;
?>
<section class="module-example-blade px-55">
    <div class="container">
        <div class="row">
            <div class="col w-full 2xl:w-2/5">
                <div class="border-2 border-solid w-2/5 border-orange-200"></div>
                <div class="pt-15">{!! $data->module['heading_5'] !!}</div>
            </div>

            <div class="col w-full 2xl:w-3/5">
                <div class="row">
                    @foreach ($data->module['repeater'] as $item)
                    <div class="col w-full lg:w-1/2">
                        {!! $item->content !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="slick-slider-demo ">
            <div class="border-solid border-2 rounded-3xl bg-white pt-40 pb-30 font-bold">
                {!! $data->module['slick_slider_demo'] !!}
            </div>
            <div class="border-solid border-2 rounded-3xl bg-white pt-40 pb-30 font-bold">
                {!! $data->module['slick_slider_demo_1'] !!}
            </div>
        </div>
    </div>
</section>

