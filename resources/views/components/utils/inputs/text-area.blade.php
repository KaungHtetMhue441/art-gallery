
@props([
    "name"=>"",
    "label"=>"",
    "containerClass"=>"",
    "required"=>false
])
<div class="{{$containerClass}}">
    <div class="mb-3">
        <label for="{{$name}}" class="form-label">{{$label}}</label>
        <textarea class="form-control form-control-lg" id="{{$name}}" rows="2" name="{{$name}}" id="{{$name}}"></textarea>
    </div>
</div>