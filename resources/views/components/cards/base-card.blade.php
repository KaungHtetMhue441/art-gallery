@props([
    'image' => '',
    'title',
    'body',
    'url'
])

<div class="card" style="width: 18rem;">
    <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}">
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>
      <p class="card-text">{{ $body }}</p>
      <a href="{{ $url }}" class="btn btn-primary">Go somewhere</a>
    </div>
</div>