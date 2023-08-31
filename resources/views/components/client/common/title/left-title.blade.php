@props([
    'title'
])
<div class="row justify-content-between mb-4 border-bottom py-3 pt-5">
    <div class="col-3">
        <h2 class="text_primary text-capitalize">{{$title}}</h2>
    </div>

    <div class="col-9">
        {{$slot}}
    </div>
</div>
{{-- <h3 class=" mb-5 border-bottom py-3  text-capitalize text_primary">{{ $title }}</h3> --}}