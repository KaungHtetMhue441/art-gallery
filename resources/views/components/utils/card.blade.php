@props([
    'title'=>''
])

<div class="card p-0">
    <div class="card-header text-center text-primary text-bold text-cyan text-active fs-3">
        {{$title}}
    </div>
    <div class="card-body">
        {{$slot}}
    </div>
</div>