<section class="module-seven-column lg:pl-25 lg:pr-16">
    <div class="container ">
        <div class="row">
            <div class="col w-full">
                <div class="row w-full ">
                    @foreach ($data->module['icon_and_content'] as $item)
                    <div class="col w-full pt-50 lg:w-1/3 2xl:w-1/3 ">
                        <div class="max-w-[220px] mx-auto">
                            <div class="h-90 "><img src="{{ $item->icon->url }}" alt="{{ $item->icon->alt }}"></div>
                            <div class="">{!! $item->content !!}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>