<section class="portfolio" id="portfolio">
    <div class="pt-5 text-center heading">
        <small>{{ $workSectionData->title }}</small>
        <h3>{{ $workSectionData->sub_title }}</h3>
    </div>

    <div id="myBtnContainer" class="mt-4 text-center">
        <!-- here we will create custom attribute using data- for filtering -->
        @if (count($categories) > 0)
            @foreach ($categories as $category)
                <button class="filter-item"
                    data-filter="{{ str_replace(' ', '', $category->name) }}">{{ $category->name }}</button>
            @endforeach
        @endif
    </div>
    <div class="portfolio-body">
        <div class="px-4 row justify-content-evenly">
            @if (count($workSectionData->works) > 0)
                @foreach ($workSectionData->works as $work)
                    <div class="mt-3 post col-md-4 All @foreach ($work->categories as $cat){{ str_replace(' ', '', $cat->name) . ' ' }} @endforeach col-10 mt-md-0"
                        data-aos="fade-up">
                        <div class="card">
                            <img src="{{ asset("storage/projects/$work->image") }}" class="card-img-top"
                                alt="..." />
                            <div class="text-center card-body">
                                <h4 class="card-title">{{ $work->name }}</h4>
                                @if (count($work->technologies) > 0)
                                    @foreach ($work->technologies as $tech)
                                        <span class="badge bg-secondary badge-pill">{{ $tech->name }}</span>
                                    @endforeach
                                @endif
                                <hr>
                                <a href="{{ $work->github_link }}" class="link">Show Code</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
</section>
