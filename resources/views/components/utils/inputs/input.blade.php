@props([
    "name"=>"",
    "label"=>"",
    "containerClass"
])
<div class="{{$containerClass}}">
    <div class="">
        <label for="{{$name}}" class="form-label">{{$label}}</label>
        <input type="text" class="form-control form-control-lg rounded" id="{{$name}}"  name="{{$name}}"/>
    </div>
</div>
