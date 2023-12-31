
@props([
    "name"=>"",
    "value"=>"",
    "label"=>"",
    "containerClass"=>"",
    "required"=>"",
    'value'=> old($name) ?? "",
    "required"=>"",
    'value'=> old($name) ?? "",
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
                    >{!!old($name)?old($name):$value!!}</textarea>
    </div>
    
    @error($name)
        <p class="text-danger">
            {{$message}}
        </p>
    @enderror
</div>