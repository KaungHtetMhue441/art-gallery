@props([
    'cover', 
    'images'
])
<div class="fotorama rounded" data-allowfullscreen="true" data-nav="thumbs" data-swipe="true">
    <a href="{{ $cover }}" data-thumb="1_thumb.jpg"></a>
    @foreach ($images as $key => $image)
        <a href="{{ $image->name }}" data-thumb="{{$key}}_thumb.jpg"></a>
    @endforeach
</div>