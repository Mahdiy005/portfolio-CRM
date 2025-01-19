<section class="pt-5 pb-5 home" id="home">
    <div class="align-middle row justify-content-evenly">
        <!-- here data-aos is used for adding aos animation  -->
        <div class="text-center col-10 col-md-6 text-md-start" data-aos="slide-right">
            <h2 style="color: #3f396d">
                Hello! I Am <br /><span class="c-orange">{{ $landingData->name }}</span>
            </h2>
            <p class="text-muted">
                {{ $landingData->description }}
            </p>
            <a href="mailto: {{ $landingData->email }}" class="px-5 py-3 mt-3 c-btn h-btn rounded-pill">
                Hire Me
            </a>
            <a href="" class="link ms-4 d-none">See My Work</a>
        </div>
        <div class="col-10 col-md-4 d-none d-md-block">
            <img src="{{ asset("storage/landing_image/$landingData->image") }}" class="img-fluid" alt="" />
        </div>
    </div>
</section>
