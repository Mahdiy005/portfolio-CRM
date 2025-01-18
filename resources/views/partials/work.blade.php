<section class="portfolio" id="portfolio">
    <div class="pt-5 text-center heading">
        <small>Creative Work</small>
        <h3>Check My Portfolio</h3>
    </div>

    <div id="myBtnContainer" class="mt-4 text-center">
        <!-- here we will create custom attribute using data- for filtering -->
        <button class="filter-item" data-filter="all">All</button>
        <button class="filter-item" data-filter="game">Game</button>
        <button class="filter-item" data-filter="webapp">Web App</button>
        <button class="filter-item" data-filter="website">Website</button>
        <button class="filter-item" data-filter="brand">Brand</button>
    </div>
    <div class="portfolio-body">
        <div class="px-4 row justify-content-evenly">
            <div class="mt-3 post col-md-4 game all col-10 mt-md-0" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets') }}/images/2048game.png" class="card-img-top" alt="..." />
                    <div class="text-center card-body">
                        <h4 class="card-title">2048 Game</h4>
                        <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                        <span class="badge bg-secondary badge-pill">JavaScript</span>
                        <span class="mb-2 badge bg-secondary badge-pill">Game</span><br />
                        <a href="#" class="link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="mt-3 post col-md-4 website all col-10 mt-md-0" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets') }}/images/currency-converter.png" class="card-img-top" alt="..." />
                    <div class="text-center card-body">
                        <h4 class="card-title">Converter App</h4>
                        <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                        <span class="badge bg-secondary badge-pill">JavaScript</span>
                        <span class="mb-2 badge bg-secondary badge-pill">Website</span><br />
                        <a href="#" class="read-more-btn link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="mt-3 post col-md-4 webapp all col-10 mt-md-0" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets') }}/images/dictionary.png" class="card-img-top" alt="..." />
                    <div class="text-center card-body">
                        <h4 class="card-title">Dictionary</h4>
                        <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                        <span class="badge bg-secondary badge-pill">JavaScript</span>
                        <span class="mb-2 badge bg-secondary badge-pill">WebApp</span><br />
                        <a href="#" class="read-more-btn link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 mt-4 row justify-content-evenly">
            <div class="mt-3 post col-md-4 game all col-10 mt-md-0" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets') }}/images/piceditor.png" class="card-img-top" alt="..." />
                    <div class="text-center card-body">
                        <h4 class="card-title">PicEditor App</h4>
                        <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                        <span class="badge bg-secondary badge-pill">JavaScript</span>
                        <span class="mb-2 badge bg-secondary badge-pill">App</span><br />
                        <a href="#" class="read-more-btn link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="mt-3 post col-md-4 website all col-10 mt-md-0" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets') }}/images/tictactoe.png" class="card-img-top" alt="..." />
                    <div class="text-center card-body">
                        <h4 class="card-title">TicTacToe Game</h4>
                        <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                        <span class="badge bg-secondary badge-pill">JavaScript</span>
                        <span class="mb-2 badge bg-secondary badge-pill">Game</span><br />
                        <a href="#" class="read-more-btn link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="mt-3 post col-md-4 all col-10 mt-md-0" data-aos="fade-up">
                <div class="card">
                    <img src="{{ asset('assets') }}/images/lang-translator.png" class="card-img-top" alt="..." />
                    <div class="text-center card-body">
                        <h4 class="card-title">Lang Translator</h4>
                        <span class="badge bg-secondary badge-pill">HTML&CSS</span>
                        <span class="badge bg-secondary badge-pill">JavaScript</span>
                        <span class="mb-2 badge bg-secondary badge-pill">Web App</span><br />
                        <a href="#" class="read-more-btn link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>