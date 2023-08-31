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
<div class="row border-bottom text-justify @if($rowReverse) flex-row-reverse text-ight @endif py-3 @if($shadow)shadow-3-sof @endif hover-zoom-custom ">
    <div class="col-lg-1">
        <div class="d-flex flex-column">
            <h5 class="fs-3 fw-bold">{{$exhibition->title}}</h5>
            <h5 class="display-6">{{$date[2]}}
                <br>
                Jun
                <br>
                2023
            </h5>
        </div>
    </div>
    <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="w-100 ratio ratio-16x9 rounded">
            <img class="object-fit-cover border rounded" src="{{$exhibition->cover_photo_url}}" alt="Exibition">
        </div>
    </div>
    <div class="col-lg-7">
        <h2 class="fs-1">TItle</h2>
        <p class="text-muted fs-6">{{$exhibition->description_en}}
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi consequuntur numquam a magni veniam quaerat excepturi temporibus porro, beatae ipsa corrupti, saepe fugit officia ad quasi maiores inventore? Odio, aut!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, velit. Consequatur laboriosam earum cumque maiores harum sit cum neque ratione magni sequi, nulla temporibus quis eligendi nesciunt sint tempore minus.</p>
    </div>
</div>