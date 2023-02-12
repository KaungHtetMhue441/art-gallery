@props([
    "name"=>"",
    "label"=>"",
    "required"=>"", 
    "containerClass",
    "type"=>"text",
    'value'=> old($name) ?? "",
])
@php
    if($required){
        $label .= '<div class="text-danger d-inline-block mx-1">*</div>';
    }
@endphp
<div class="{{$containerClass}}">
    <div class="">
        <label  for="{{$name}}" 
                class="form-label"
            >
                {!!$label!!}

        </label>
        <input  class="form-control form-control-lg rounded" 
                id="{{$name}}"  
                name="{{$name}}"
                type="{{$type}}"
                value="{!! $value !!}" 
                {{$required}}
        />
    </div>
    @error($name)
        <p class="text-danger">
            {{$message}}
        </p>
    @enderror
</div>
