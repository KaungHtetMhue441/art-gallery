@props([
    "exhibition"=>'',
    "shadow"=>true,
    "rowReverse"=>false
])
@php
if($exhibition){
    $date = explode("-",$exhibition->exhibition_date);
}
@endphp
<div class="row border-bottom @if($rowReverse) flex-row-reverse @endif py-3 @if($shadow)shadow-3-sof @endif hover-zoom-custom ">
    <div class="col-lg-1">
        <div class="d-flex flex-column">
            <h5 class="fs-3 fw-bold">{{$exhibition->title}}</h5>
            <h5 class="display-4">{{$date[2]}}</h5>
        </div>
    </div>
    <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="w-100 ratio ratio-16x9 rounded">
            <img class="object-fit-cover border rounded" src="{{$exhibition->cover_photo_url}}" alt="Exibition">
        </div>
    </div>
    <div class="col-lg-7">
        <h2 class="fs-1">TItle</h2>
        <p class="text-muted fs-6">{{$exhibition->description_en}}</p>
    </div>
</div>