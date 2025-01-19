<section class="mt-5 expertise" id="service">
    <div class="text-center heading">
        <small>{{ $expertiseSectionData->title }}</small>
        <h3>
            {{ $expertiseSectionData->sub_title }}
        </h3>
    </div>
    <div class="mt-5 row justify-content-evenly">
        @if (count($expertiseSectionData->experiences) > 0)
            @foreach ($expertiseSectionData->experiences as $item)
                <div class="col-10 col-md-4" data-aos="fade-up">
                    <div class="service-card">
                        <div style="font-size: 80px">{!! $item->icon !!}</div>
                        <div class="mt-3 content">
                            <h4>{{ $item->title }}</h4>
                            <p class="text-muted">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
</section>
