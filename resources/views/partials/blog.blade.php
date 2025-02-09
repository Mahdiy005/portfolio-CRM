<section class="pb-5 mt-5 blog" id="blog">
    <div class="pt-5 text-center heading">
        <small>{{ $blogData->title }}</small>
        <h3>{{ $blogData->sub_title }}</h3>
    </div>
    <div class="px-4 mt-4 row justify-content-evenly" data-aos="fade-up">
        @if (count($blogData->blogs) > 0)
            @foreach ($blogData->blogs as $blog)
            <div class="mt-2 blogpost col-md-4 col-10 mt-md-0 game all">
                <div class="card">
                    <img src="{{ asset('storage/blogs') }}/{{ $blog->image }}" class="card-img-top rounded-4" alt="..." />
                    <div class="px-4 card-body">
                        <small>By {{ $blog->user_name }}</small><span class="ms-3">{{ $blog->created_at->format('M d,Y') }}</span>
                        <h4 class="card-title">
                            <a href="">{{ $blog->title }}</a>
                        </h4>
                        <p class="text-muted">
                            {{ getFirstNWords($blog->content, 20) }}.....
                        </p>
                        <a href="{{ route('blog-table.blogDeatils', ['id'=>$blog->id]) }}" class="read-more-btn link"
                            >Read More</a>

                    </div>
                </div>
            </div>
            @endforeach
        @endif

        <!-- here we will make modals if Read more link is clicked the modal will popup -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i
                            class="bi bi-x-circle-fill"></i></button>

                    <div class="px-4 modal-body">
                        <div class="img">
                            <img src="{{ asset('assets') }}/images/2048game.png" class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 content">
                            <small>By Pawan Kumavat</small><span class="text-muted ms-2">Mar 8,2022</span>
                            <h4 class="mt-3 card-title">Quis autem vea eum iure reprehenderit</h4>
                            <div class="mt-4 social-links">
                                <button href="" class="rounded-pill dribble">
                                    <i class="bi bi-dribbble"></i>
                                </button>
                                <button href="" class="rounded-pill whatsapp">
                                    <i class="bi bi-whatsapp"></i>
                                </button>
                                <button href="" class="rounded-pill behance">
                                    <i class="bi bi-behance"></i>
                                </button>
                            </div>
                            <p class="mt-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida
                                augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis.
                                Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis
                                urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu
                                scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                        </div>
                    </div>
                    <div class="px-2 heading">
                        <h3 class="fs-3 ms-3">Leave A Comment</h3>
                    </div>
                    <div class="px-2 pb-4 mt-3 contact-form ms-3">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="E-mail" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Mobile No." />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5"></textarea>
                        </div>
                        <button class="px-4 py-2 mt-3 c-btn h-btn rounded-pill">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i
                            class="bi bi-x-circle-fill"></i></button>

                    <div class="px-4 modal-body">
                        <div class="img">
                            <img src="{{ asset('assets') }}/images/currency-converter.png" class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 content">
                            <small>By Pawan Kumavat</small><span class="text-muted ms-2 ms-md-0">Mar 8,2022</span>
                            <h4 class="mt-3 card-title">Quis autem vea eum iure reprehenderit</h4>
                            <div class="mt-4 social-links">
                                <button href="" class="rounded-pill dribble">
                                    <i class="bi bi-dribbble"></i>
                                </button>
                                <button href="" class="rounded-pill whatsapp">
                                    <i class="bi bi-whatsapp"></i>
                                </button>
                                <button href="" class="rounded-pill behance">
                                    <i class="bi bi-behance"></i>
                                </button>
                            </div>
                            <p class="mt-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida
                                augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis.
                                Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis
                                urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu
                                scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                        </div>
                    </div>
                    <div class="px-2 heading">
                        <h3 class="fs-3 ms-3">Leave A Comment</h3>
                    </div>
                    <div class="px-2 pb-4 mt-3 contact-form ms-3">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="E-mail" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Mobile No." />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5"></textarea>
                        </div>
                        <button class="px-4 py-2 mt-3 c-btn h-btn rounded-pill">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <button type="button" class="btn-c rounded-pill" data-bs-dismiss="modal"><i
                            class="bi bi-x-circle-fill"></i></button>

                    <div class="px-4 modal-body">
                        <div class="img">
                            <img src="{{ asset('assets') }}/images/dictionary.png" class="img-fluid" alt="">
                        </div>
                        <div class="mt-3 content">
                            <small>By Pawan Kumavat</small><span class="text-muted ms-2 ms-md-0">Mar 8,2022</span>
                            <h4 class="mt-3 card-title">Quis autem vea eum iure reprehenderit</h4>
                            <div class="mt-4 social-links">
                                <button href="" class="rounded-pill dribble">
                                    <i class="bi bi-dribbble"></i>
                                </button>
                                <button href="" class="rounded-pill whatsapp">
                                    <i class="bi bi-whatsapp"></i>
                                </button>
                                <button href="" class="rounded-pill behance">
                                    <i class="bi bi-behance"></i>
                                </button>
                            </div>
                            <p class="mt-3 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida
                                augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis.
                                Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis
                                urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu
                                scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                        </div>
                    </div>
                    <div class="px-2 heading">
                        <h3 class="fs-3 ms-3">Leave A Comment</h3>
                    </div>
                    <div class="px-2 pb-4 mt-3 contact-form ms-3">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="E-mail" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Mobile No." />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5"></textarea>
                        </div>
                        <button class="px-4 py-2 mt-3 c-btn h-btn rounded-pill">
                            Submit
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
