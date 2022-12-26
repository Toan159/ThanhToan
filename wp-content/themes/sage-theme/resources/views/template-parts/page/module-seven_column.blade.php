<section class="module-seven-column">
    <div class="container row">
        @foreach ($data->module['icon_and_content'] as $item)
            <div class="w-full pt-50">
                <div class="pr-[250px] pl-[250px]"><img src="{{ $item->icon->url }}" alt="{{ $item->icon->alt }}"></div>
                <div class="">{!! $item->content !!}</div>
            </div>
        @endforeach
    </div>
</section>