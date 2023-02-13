@props([
    "name"=>"",
    "label"=>"",
    "required"=>"", 
    "containerClass"=>""
])
<div class="{{$containerClass}}">
    <label for="{{$name}}" class="form-label">{{$label}}</label>
    <select class="form-select form-select-lg rounded" 
            aria-label="Default select example" 
            name="{{$name}}" 
            id="{{$name}}"
        >
            
        <option selected>Select</option>
        {{$slot}}
        
    </select>   
</div>
