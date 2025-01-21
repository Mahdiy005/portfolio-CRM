<section class="py-5 mt-5 skill" id="about">
    <div class="row justify-content-evenly">
        <div class="col-10 col-md-5 skill-with-progress" data-aos="slide-right">
            <div class="row justify-content-evenly">
                @if (count($skillSectionData->skills))
                   @foreach ($skillSectionData->skills as $skill)
                   <div class="my-4 col-10 col-md-6">
                    <div class="progress-card ms-3 ms-md-0">
                        <div class="circular-progress html-css" style="background: conic-gradient(#7d2ae8 {{ ($skill->progress / 100) * 360 }}deg, #ededed 0deg);">
                            <span class="progress-value"  >{{ $skill->progress }}%</span>
                        </div>
                        <br />
                        <span class="text">{{ $skill->name }}</span>
                    </div>
                </div>
                   @endforeach
                @endif
            </div>
        </div>
        <div class="col-10 col-md-5 skill-detail" data-aos="slide-left">
            <div class="mt-5 heading mt-md-3">
                <small>{{ $skillSectionData->title }}</small>
                <h3>{{ $skillSectionData->sub_title }}</h3>
                <p class="text-muted">
                    {{ $skillSectionData->descrption }}.
                </p>
                <button class="px-5 py-3 mt-3 c-btn h-btn rounded-pill">
                    <!-- here download attribute is used for adding download functionality to button  -->
                    <a href="{{ asset("storage/CV/$skillSectionData->cv") ?? '' }}" download="{{ $landingData->name }}"
                        style="text-decoration: none;color: #fff;">Download CV</a>
                </button>
            </div>
        </div>
    </div>
</section>
