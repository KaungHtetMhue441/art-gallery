@props([
    'artist',
    'size' => '200px'
])

<div class="col-md-6 col-lg-4 mb-3">
    <a href="{{ route('artists.show', ['id' => $artist->id]) }}">
        <div class="w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="rounded-circle overflow-hidden hover-zoom" style="width : {{ $size }}; height : {{ $size }};"> 
                <img class="object-fit-cover" width="100%" height="100%" src="{{ $artist->profile_image }}" alt="{{ $artist->name }}">
            </div>
            <h5 class="mt-2 fs-4 text-muted">{{ $artist->name }}</h5>
        </div>
    </a>
</div>