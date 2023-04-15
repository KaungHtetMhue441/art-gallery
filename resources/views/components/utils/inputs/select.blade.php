@props([
    "name"=>"",
    "label"=>"",
    "required"=>"", 
    "containerClass"=>""
])
<div class="{{$containerClass}}">
    <label for="{{$name}}" class="form-label">{{$label}} {!! $required ? '<div class="text-danger d-inline-block mx-1">*</div>' : '' !!}</label>
    <select class="form-select form-select-lg rounded" 
            {{$required}}
            aria-label="Default select example" 
            name="{{$name}}" 
            id="{{$name}}"
        >
            
        <option selected>Select</option>
        {{$slot}}
        
    </select> 

    @error($name)
     <span class="text-danger">{{$message}}</span>
    @enderror  

</div>
