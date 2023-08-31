@props([
    'images' => [],
])
<section class="section-80 overflow-hidden p-0">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade h-100 w-100" data-bs-ride="carousel">
        <div class="position-absolute" style="top:0;bottom:0;left:0;right:0;background-color: #a99180;z-index: 900; opacity: 0.3">

        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($images as $image)
                <div class="carousel-item @if ($loop->index == 0) active @endif">
                    <img src="{{ $image->image_url }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample  Captions"
            data-bs-slide="prev">
            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
            <span class="visually-hidden d-none">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            {{-- <span class="carousel-control-next-icon " aria-hidden="true"></span> --}}
            <span class="visually-hidden d-none">Next</span>
        </button>
    </div>
    <div class="container position-absolute w-50 text-center" style="top: 30%;right: 0;left: 0; z-index: 1000;">
        <div class="form-label text-shadow-large text-light" style="font-size:1.8rem; height: 40px; " id="home-search">
        </div>
        <div>
            <input autocomplete="off" class="form-control form-control-lg rounded-pill px-5" list="datalistOptions" id="search"
                placeholder="Type to search...">
            <div class="search-items" style="z-index: 1002; width:875px;position: absolute;top:115px;left: 40px;">
                <div class="list-group w-100 " id="search_items">
                </div>
            </div>
        </div>
        <br>
        <span id="text1" class="text-shadow-large text-gradient-2  position-relative"></span>
    </div>
</section>
