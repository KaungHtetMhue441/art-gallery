
@props([
    "name" => "",
    "label"=>"",
    "required"=>"",   
    "containerClass" => " ",
    "btnLabel" => "upload",
])

<div class="{{$containerClass}}">       
    <label for="{{$name}}" class="form-label ">{{$label}}</label>
    <div class="input-group rounded">
        <input type="file" class="form-control form-control-lg" id="{{$name}}" name="{{$name}}">
        <label class="input-group-text mb-0"  id="{{$name}}">{{$btnLabel}}</label>
    </div>
</div>