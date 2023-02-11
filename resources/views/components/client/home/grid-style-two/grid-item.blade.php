@props([
    'image',
    'title',
    'summary'
])
<div class="card upreveal">
    <img src="{{ $image }}" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>
      <p class="card-text"> {{ $summary }} </p>
    </div>
</div>