@props([
    'date',
    'time',
    'title'
])

<div class="row border-bottom border-2 py-2">
    <div class="col-6 col-lg-2">
        <p> {{ $date }} </p>
    </div>
    <div class="col-6 col-lg-2">
        <p> {{ $time }} </p>
    </div>
    <div class="col-12 col-lg-8">
        <p> {{ $title }} </p>
    </div>
</div>