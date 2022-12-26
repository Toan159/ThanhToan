<section class="module-eight-column px-32">
    <div class="container">
        <div>
            <div class="text-orange-100 font-bold">{!! $data->module['text'] !!}</div>

            <div class="pt-10">
                <div class="border-solid border-2 rounded-[37px] bg-white place-content-stretch w-full 2xl:w-3/5">
                    @foreach ($data->module['content'] as $item)
                        <img src="{!! $item->image->url !!}" alt="{!! $item->image->alt !!}">
                        <div class="px-20 pt-15 pb-15">
                            {!! $item->content_1 !!}
                            <div class="font-bold">
                                <a href="{{ $item->link->url }}" target="{{ $item->link->target }}">{{ $item->link->title }}</a>
                               <span class="icomoon icon-chevron-down"></span>
                            </div>
                            
                        </div>
                    @endforeach
               </div>
            </div>

            <div class="pt-10">
                <div class="border-solid border-2 rounded-[37px] bg-white place-content-stretch w-full 2xl:w-3/5">
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
            </div>

            <div class="pt-10">
                <div class="border-solid border-2 rounded-[37px] bg-white place-content-stretch w-full 2xl:w-3/5">
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
        
        
        {{-- <div class="flex-module-eight-column row">
            <div class="eight-column col w-full "><p class="text-orange-100">THE LATEST</p></div>
            <div class="border-solid border-2 rounded-2xl bg-white place-content-stretch w-full 2xl:w-3/5 ">
                <div><img class=" w-full xl:w-full" src="@asset('./images/default/john-schnobrich-FlPc9_VocJ4-unsplash.png')"></div>
                
                <div class="px-20 pt-15">
                    <h3 >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h3>
                    <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    <p class="text-orange-100 font-bold" >READ MORE <span class="icomoon icon-chevron-down"></span></p>
                </div>
            </div>

            <div class="pt-10">
                <div class="col w-full border-solid border-2 rounded-2xl bg-white 2xl:w-2/5 px-20 pt-15" >
                    <h3 >Lorem ipsum dolor sit amet, consetetur</h3>
                    <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    <p class="text-orange-100 font-bold">READ MORE <span class="icomoon icon-chevron-down"></span></p>
                </div>
            </div>

            <div class="pt-10">
                <div class="col w-full border-solid border-2 rounded-2xl bg-white px-20 pt-15">
                    <h3>Lorem ipsum dolor sit amet, consetetur</h3>
                    <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    <p class="text-orange-100 font-bold">READ MORE <span class="icomoon icon-chevron-down"></span></p>
                </div>
            </div>
        </div> --}}
    </div>
</section>