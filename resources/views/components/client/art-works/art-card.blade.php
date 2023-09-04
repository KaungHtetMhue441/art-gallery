@props([
  'artwork'
])

<a href="{{ route('artWorks.show', ['artwork' => $artwork->id]) }}" class="hover-shadow text-decoration-none">
    {{-- <div class="card bg-dark text-white ratio ratio-1x1 bg-image ripple hover-zoom shadow" data-mdb-ripple-color="light">
        <img src="{{ $artwork->cover_photo_url }}" class="card-img hover-overlay mask" alt="{{ $artwork->title }}"/>
        <div class="card-img-overlay mask" style="background-color: hsla(0, 4%, 16%, 0.4)">
          <div style="position: absolute;bottom: 10px;left: 10px;">
            <h5 class="card-title text-left">{{ $artwork->title }}</h5>
            <p class="card-text">
              {{ $artwork->artist->name }} | {{ $artwork->category->name }}
            </p>

          </div>
        </div>
    </div> --}}

  {{-- <p class="card-text fs-3 fw-bolder">
    {{ $artwork->price }} {{ $artwork->currency == 'mmk' ? "MMK" : "$" }}
  </p> --}}
    <div class="card shadow-2-soft border-1 h-100 w-100 hover-zoom-custom" >
      <img src="{{ $artwork->cover_photo_url }}" class="card-img-top " style="height: 250px" alt="...">
      <div class="card-body">
        <h5 class="card-text text_primary">{{$artwork->title}}</h5>
      </div>
    </div>
</a>