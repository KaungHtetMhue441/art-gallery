@props([
    'title'=>''
])

<div class="card p-0 shadow">
    <div class="card-header text-center bg-cyan shadow text-white fs-3">
        {{$title}}
    </div>
    <div class="card-body">
        {{$slot}}
    </div>
</div>