@props(['artworks' => []])

<section class="section">
    <div class="container py-5 border-top ">
    <x-client.common.title.center-title title="Latest Artworks" />
        <div class="row py-3 align-items-center ">
            @if (isset($artworks[0]))
                <div class="col-lg-6 h-auto h-lg-100 shadow p-3 rounded-5 hover-shadow">
                    <a href="{{ route('artWorks.show', ['artwork' => $artworks[0]->id]) }}">
                        <div class="card bg-dark text-white hover-shadow h-100 w-100 upreveal ripple"
                            data-mdb-ripple-color="light">
                            <img style="width: 100%;height: 600px!important;object-fit: cover"
                                src="{{ $artworks[0]->cover_photo_url }}" class="card-img h-100"
                                alt="{{ $artworks[0]->title }}" />
                            <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                <h5 class="card-title">{{ $artworks[0]->title }}</h5>
                                <p class="card-text">
                                    {{ $artworks[0]->artist->name }} | {{ $artworks[0]->category->name }}
                                </p>
                                {{-- <p class="card-text fs-5">
                                {{ $artworks[0]->price }} {{ $artworks[0]->currency == 'mmk' ? "MMK" : "$" }}
                            </p> --}}

                            </div>

                        </div>
                    </a>
                </div>
            @endif

            <div class="col-lg-3 h-50 h-lg-100 artwork-small">
                <div class="row h-100 w-100 m-0">
                    @if (isset($artworks[1]))
                        <div class="col-6 col-lg-12 h-lg-50 p-0 pe-1 pt-2 pe-lg-0 pt-lg-0">
                            <a href="{{ route('artWorks.show', ['artwork' => $artworks[1]->id]) }}">
                                <div class="card bg-dark text-white  h-100 w-100 leftreveal ripple"
                                    data-mdb-ripple-color="light">
                                    <img style="width: 100%;height:200px!important;object-fit: cover"
                                        src="{{ $artworks[1]->cover_photo_url }}" class="card-img h-100"
                                        alt="{{ $artworks[1]->title }}" />
                                    <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                        {{-- <h5 class="card-title">{{ $artworks[1]->title }}</h5> --}}
                                        <p class="card-text">
                                            {{ $artworks[1]->artist->name }} | {{ $artworks[1]->category->name }}
                                        </p>
                                        {{-- <p class="card-text fs-5">
                                            {{ $artworks[1]->price }} {{ $artworks[1]->currency == 'mmk' ? "MMK" : "$" }}        
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif

                    @if (isset($artworks[2]))
                        <div class="col-6 col-lg-12 h-lg-50 p-0 ps-1 pt-2 ps-lg-0 pt-lg-2 ">
                            <a href="{{ route('artWorks.show', ['artwork' => $artworks[2]->id]) }}">
                                <div class="card bg-dark text-white hover-shadow h-100 w-100 leftreveal ripple"
                                    data-mdb-ripple-color="light">
                                    <img style="width: 100%;height:200px!important;object-fit: cover"
                                        src="{{ $artworks[2]->cover_photo_url }}" class="card-img h-100"
                                        alt="{{ $artworks[2]->title }}" />
                                    <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                        {{-- <h5 class="card-title">{{ $artworks[2]->title }}</h5> --}}
                                        <p class="card-text">
                                            {{ $artworks[2]->artist->name }} | {{ $artworks[2]->category->name }}
                                        </p>
                                        {{-- <p class="card-text fs-5">
                                            {{ $artworks[2]->price }} {{ $artworks[2]->currency == 'mmk' ? "MMK" : "$" }}          
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif

                    @if (isset($artworks[3]))
                        <div class="col-6 col-lg-12 h-lg-50 p-0 ps-1 pt-2 ps-lg-0 pt-lg-2 hover-shadow">
                            <a href="{{ route('artWorks.show', ['artwork' => $artworks[3]->id]) }}">
                                <div class="card bg-dark text-white hover-shadow h-100 w-100 leftreveal ripple"
                                    data-mdb-ripple-color="light">
                                    <img style="width: 100%;height: 100%;height:200px!important;object-fit: cover"
                                        src="{{ $artworks[3]->cover_photo_url }}" class="card-img h-100"
                                        alt="{{ $artworks[3]->title }}" />
                                    <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                        {{-- <h5 class="card-title">{{ $artworks[2]->title }}</h5> --}}
                                        <p class="card-text">
                                            {{ $artworks[3]->artist->name }} | {{ $artworks[3]->category->name }}
                                        </p>
                                        {{-- <p class="card-text fs-5">
                                            {{ $artworks[2]->price }} {{ $artworks[2]->currency == 'mmk' ? "MMK" : "$" }}          
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-3 h-50 h-lg-100 artwork-small">
                <div class="row h-100 w-100 m-0">
                    @if (isset($artworks[4]))
                        <div class="col-6 col-lg-12 h-lg-50 p-0 pe-1 pt-2 pe-lg-0 pt-lg-0 ">
                            <a href="{{ route('artWorks.show', ['artwork' => $artworks[4]->id]) }}">
                                <div class="card bg-dark text-white hover-shadow h-100 w-100 leftreveal ripple"
                                    data-mdb-ripple-color="light">
                                    <img style="width: 100%;height: 100%;height:200px!important;object-fit: cover"
                                        src="{{ $artworks[4]->cover_photo_url }}" class="card-img h-100"
                                        alt="{{ $artworks[4]->title }}" />
                                    <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                        {{-- <h5 class="card-title">{{ $artworks[1]->title }}</h5> --}}
                                        <p class="card-text">
                                            {{ $artworks[4]->artist->name }} | {{ $artworks[4]->category->name }}
                                        </p>
                                        {{-- <p class="card-text fs-5">
                                            {{ $artworks[1]->price }} {{ $artworks[1]->currency == 'mmk' ? "MMK" : "$" }}        
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif

                    @if (isset($artworks[5]))
                        <div class="col-6 col-lg-12 h-lg-50 p-0 ps-1 pt-2 ps-lg-0 pt-lg-2">
                            <a href="{{ route('artWorks.show', ['artwork' => $artworks[5]->id]) }}">
                                <div class="card bg-dark text-white hover-shadow h-100 w-100 leftreveal ripple"
                                    data-mdb-ripple-color="light">
                                    <img style="width: 100%;height: 100%;height:200px!important;object-fit: cover"
                                        src="{{ $artworks[5]->cover_photo_url }}" class="card-img h-100"
                                        alt="{{ $artworks[5]->title }}" />
                                    <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                        {{-- <h5 class="card-title">{{ $artworks[2]->title }}</h5> --}}
                                        <p class="card-text">
                                            {{ $artworks[5]->artist->name }} | {{ $artworks[5]->category->name }}
                                        </p>
                                        {{-- <p class="card-text fs-5">
                                            {{ $artworks[2]->price }} {{ $artworks[2]->currency == 'mmk' ? "MMK" : "$" }}          
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif

                    @if (isset($artworks[6]))
                        <div class="col-6 col-lg-12 h-lg-50 p-0 ps-1 pt-2 ps-lg-0 pt-lg-2">
                            <a href="{{ route('artWorks.show', ['artwork' => $artworks[6]->id]) }}">
                                <div class="card bg-dark text-white hover-shadow h-100 w-100 leftreveal ripple"
                                    data-mdb-ripple-color="light">
                                    <img style="width: 100%;height: 100%;height:200px!important;object-fit: cover"
                                        src="{{ $artworks[6]->cover_photo_url }}" class="card-img h-100"
                                        alt="{{ $artworks[6]->title }}" />
                                    <div class="card-img-overlay mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
                                        {{-- <h5 class="card-title">{{ $artworks[2]->title }}</h5> --}}
                                        <p class="card-text">
                                            {{ $artworks[6]->artist->name }} | {{ $artworks[6]->category->name }}
                                        </p>
                                        {{-- <p class="card-text fs-5">
                                            {{ $artworks[2]->price }} {{ $artworks[2]->currency == 'mmk' ? "MMK" : "$" }}          
                                        </p> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</section>
