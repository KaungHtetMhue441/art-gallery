@props([
    'image',
    'title',
    'summary',
    'slug'
])
<div class="card upreveal hover-shadow">
    <img src="{{asset('storage/blogs/'.$image)}}" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>

      <div class="text-break" style="height: 90px">
        <p class="card-text truncate"> {!! Str::limit($summary,50)  !!} </p>
      </div>

      <a href="{{ route('blogs.show', ['slug' => $slug]) }}">Read More</a>
    </div>
</div>