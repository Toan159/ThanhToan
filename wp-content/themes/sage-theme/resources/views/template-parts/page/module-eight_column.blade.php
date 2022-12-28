<section class="module-eight-column lg:px-32 xl:pl-50">
    <div class="container">
        <div class="row">
            <div class="text-orange-100 font-bold col w-full">{!! $data->module['text'] !!}</div>
            
            <div class="pt-10 col xl:w-3/5 2xl:w-1/2 2k:w-1/2">
                <div class="w-full border-solid border-2 rounded-[37px] bg-brown-300  ">
                    @foreach ($data->module['content'] as $item)
                        <img src="{!! $item->image->url !!}" alt="{!! $item->image->alt !!}">
                        <div class="px-20 pt-15 pb-15">
                            {!! $item->content_1 !!}
                            <div class="font-bold ">
                                <a href="{{ $item->link->url }}" target="{{ $item->link->target }}">{{ $item->link->title }}</a>
                               <span class="icomoon icon-chevron-down"></span>
                            </div>
                        </div>
                    @endforeach
               </div>
            </div>

            <div class="pt-10 col w-full xl:w-3/5 2xl:w-1/2 2k:w-1/2 ">
                <div class="w-full border-solid border-2 rounded-[37px] bg-brown-300 py-5">
                    @foreach ($data->module['next_content'] as $item)
                        <div class="px-20 pt-15 pb-15">
                            {!! $item->conten_1 !!}
                            <div class="font-bold">
                                <a href="{{ $item->link_1->url }}" target="{{ $item->link_1->target }}">{{ $item->link_1->title }}</a>
                               <span class="icomoon icon-chevron-down"></span>
                            </div>
                        </div>
                    @endforeach
               </div>

                <div class="w-full border-solid border-2 rounded-[37px] bg-brown-300 py-4 md:hidden lg:hidden 2xl:block 2k:block">
                    @foreach ($data->module['next_content_1'] as $item)
                        <div class="px-20 pt-15 pb-15">
                            {!! $item->content_2 !!}
                            <div class="font-bold"> 
                                <a href="{{ $item->link_2->url }}" target="{{ $item->link_2->target }}">{{ $item->link_2->title }}</a>
                                <span class="icomoon icon-chevron-down"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col w-full xl:w-3/5 pt-10 2xl:hidden 2k:hidden">
                    <div class="border-solid border-2 rounded-[37px] bg-brown-300 w-full ">
                        @foreach ($data->module['next_content_1'] as $item)
                            <div class="px-20 pt-15 pb-15">
                                {!! $item->content_2 !!}
                                <div class="font-bold"> 
                                    <a href="{{ $item->link_2->url }}" target="{{ $item->link_2->target }}">{{ $item->link_2->title }}</a>
                                    <span class="icomoon icon-chevron-down"></span>
                                </div>
                            </div>
                        @endforeach
                   </div>
            </div>
        </div>
    </div>
</section>