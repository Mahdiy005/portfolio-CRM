<section class="py-5 contact" id="contact">
    <div class="text-center heading">
        <small>{{ $contactData->title }}</small>
        <h3>{{ $contactData->sub_title }}</h3>
    </div>
    <div class="mt-5 row justify-content-evenly">
        <div class="col-md-5 col-10 contact-details" data-aos="slide-right">
            <div class="row justify-content-evenly">
                <div class="col-1">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="col-11">
                    <p>{{ $contactData->location }}</p>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-1">
                    <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="col-11">
                    <p>{{ $contactData->phone }}</p>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-1">
                    <i class="bi bi-send-fill"></i>
                </div>
                <div class="col-11">
                    <p>{{ $contactData->email }}</p>
                </div>
            </div>
            <div class="row justify-content-evenly">
                <div class="col-1">
                    <i class="bi bi-globe-americas"></i>
                </div>
                <div class="col-11">
                    <p>{{ $contactData->site_link }}</p>
                </div>
            </div>
        </div>
        <div class="mt-3 col-md-5 col-10 mt-md-0" data-aos="slide-left">
            <form action="{{ route('contact-table.store') }}" method="post">
                @csrf
                <div class="contact-form">
                    <div class="mb-3">
                        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" />
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail" />
                    </div>
                    <div class="mb-3">
                        <input name="mobile" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Mobile No." />
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5"></textarea>
                    </div>
                    <input type="hidden" name="contact_section_id" value="1">
                    <button class="px-5 py-3 mt-3 c-btn h-btn rounded-pill">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>
