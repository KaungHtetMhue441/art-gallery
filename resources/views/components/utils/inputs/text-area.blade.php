
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
        <textarea   class="form-control form-control-lg" 
                    id="{{$name}}" 
                    rows="2" 
                    name="{{$name}}" 
                    id="{{$name}}" 
                    {{$required}}
                    >{{old($name)?old($name):$value}}</textarea>
    </div>
    
    @error($name)
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>