@props([
  'artwork'
])

<a href="{{ route('artWorks.show', ['artwork' => $artwork->id]) }}" class="hover-shadow">
    <div class="card bg-dark text-white ratio ratio-1x1 bg-image ripple hover-zoom" data-mdb-ripple-color="light">
        <img src="{{ $artwork->cover_photo_url }}" class="card-img hover-overlay mask" alt="{{ $artwork->title }}"/>
        <div class="card-img-overlay mask" style="background-color: hsla(0, 4%, 16%, 0.4)">
          <h5 class="card-title">{{ $artwork->title }}</h5>
          <p class="card-text">
            {{ $artwork->artist->name }} | {{ $artwork->category->name }}
          </p>
          <p class="card-text fs-3 fw-bolder">
            {{ $artwork->price }} {{ $artwork->currency == 'mmk' ? "MMK" : "$" }}
          </p>
        </div>
    </div>
</a>