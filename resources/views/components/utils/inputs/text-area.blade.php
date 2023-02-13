
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
    <div class="mb-3">      
        <label for="{{$name}}" class="form-label">{{$label}}</label>
< HEAD
        <textarea   class="form-control form-control-lg" i
                    d="{{$name}}" 
                    rows="2" 
                    name="{{$name}}" 
                    id="{{$name}}" 
                    {{$required}}
                    >{{$value}}
                </textarea>
=======
        <textarea   
            class="form-control form-control-lg" 
            id="{{$name}}" 
            rows="2" 
            name="{{$name}}" 
            id="{{$name}}" 
            {{$required}}
        >{!!$value!!}
        </textarea>
>>>>>>> 511475640b7a6cfc5dccb05d7cf84774809bdbba
    </div>
    @error($name)
        <p class="text-danger">
            {{$message}}
        </p>
    @enderror
    @error($name)
        <p class="text-danger">
            {{$message}}
        </p>
    @enderror
</div>