
@props([
    "name"=>"",
    "value"=>"",
    "label"=>"",
    "containerClass"=>"",
    "required"=>"", 
])
<div class="{{$containerClass}}">
    <div class="mb-3">      
        <label for="{{$name}}" class="form-label">{{$label}}</label>
        <textarea   class="form-control form-control-lg" i
                    d="{{$name}}" 
                    rows="2" 
                    name="{{$name}}" 
                    id="{{$name}}" 
                    {{$required}}>
                    {{$value}}
        </textarea>
    </div>
</div>