@props([
    "class"=>"",
    "action"=>"#",
    "method"=>"",
    "enctype"=>""
])
<form class="{{$class}}" action="{{$action}}" method="{{$method}}" enctype="{{$enctype}}">
    @csrf
    {{$slot}}
</form>