@props([
    'title'=>''
])

<div class="card p-0 shadow shadow-inner">
    <div class="card-header text-center bg-cyan shadow text-white fs-3">
        <b>{{$title}}</b>
    </div>
    <div class="card-body">
        {{$slot}}
    </div>
</div>