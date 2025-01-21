<hr>
<section class="pt-5 mt-5 testimonial" id="testimonial">
    <div class="row justify-content-evenly">
        <div class="col-md-4 col-10" data-aos="slide-right">
            <img src="{{ asset('assets') }}/images/testimonials.webp" class="img-fluid" alt="" />
        </div>
        <div class="mt-5 col-md-6 col-10" data-aos="slide-left">
            <div class="heading">
                <small>{{ $testimonialsData->title }}</small>
                <h3>{{ $testimonialsData->sub_title }}</h3>
                <!-- here we will use carousel element from bootstrap -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @if (count($testimonialsData->testimonialTables) > 0)
                            @foreach ($testimonialsData->testimonialTables as $i => $testimonial)
                            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                <div class="row justify-content-evenly">
                                    <div class="text-center col-2">
                                        <i class="bi bi-quote"></i>
                                    </div>
                                    <div class="col-10">
                                        <p class="text-muted">
                                            {{ $testimonial->message }}
                                        </p>
                                        <h4>{{ $testimonial->user_name }}</h4>
                                        <small class="fs-6 text-muted">{{ $testimonial->position }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif

                    </div>
                    <button class="nextprev-btn rounded-pill prev-btn" type="button"
                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <i class="bi bi-arrow-left-circle-fill prev"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="nextprev-btn rounded-pill next-btn" type="button"
                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <i class="bi bi-arrow-right-circle-fill next"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
