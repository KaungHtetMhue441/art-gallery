@props([
    "class"=>"",
    "action"=>"#",
    "method"=>"",
    "enctype"=>"multipart/form-data"
])
<form class="{{$class}}" action="{{$action}}" method="{{$method}}" enctype="{{$enctype}}">
    @csrf
    {{$slot}}
</form>