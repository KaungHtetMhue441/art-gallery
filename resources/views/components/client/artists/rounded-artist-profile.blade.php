@props([
    'artist',
    'size' => '200px'
])
    <div class="col-md-6 mb-3 col-lg-3" >
    {{-- <a href="{{ route('artists.show', ['artist' => $artist->id]) }}" class="text-decoration-none"> --}}
        <div class="card hover-shadow border-2 border-gray-300 rounded-3" style="width : 100%; z-index: 0; background-image: url(@if($artist->artWorks->count() > 0){{$artist->artWorks[0]->cover_photo_url}}@endif)">
            @if ($artist->artWorks->count() > 0)
                {{-- <img src="{{ $artist->artWorks[0]->cover_photo_url }}" style="width:100%;z-index: 1;position: absolute" alt=""> --}}
            @endif
            <img src="{{ $artist->profile_image_url }}" class="card-img-top rounded-circle mx-auto mt-3"style="height:300px;width:300px!important;" alt="...">
            <div class="card-body bg-white">
                <div class="row justify-content-between">
                   <div class="col-lg-7">
                        <h6 class="card-title text_primary text-capitalize " >{{ $artist->name }}</h6>
                   </div>
                   <div class="col-5">
                        <h6 class=" text_primary float-end">{{$artist->artistType->name}}</h6>
                   </div>
                </div>
                <a href="{{ route('artists.show', ['artist' => $artist->id]) }}" class="btn mt-2 btn_outline_pri btn-outline-primary w-100 float-end">
                    View Pofile
                </a>
            </div>
        </div>
        {{-- <div class="w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="rounded-circle overflow-hidden hover-zoom" style="width : {{ $size }}; height : {{ $size }};"> 
                <img class="object-fit-cover" width="100%" height="100%" src="{{ $artist->profile_image_url }}" alt="{{ $artist->name }}">
            </div>
            <h4 class="mt-2 fs-4 text-muted">{{ $artist->name }}</h4>
        </div> --}}
    {{-- </a> --}}
</div>