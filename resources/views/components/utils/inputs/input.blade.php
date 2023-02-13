@props([
    "name"=>"",
    "label"=>"",
    "required"=>"", 
    "containerClass",
    'value'=>'',
    'type'=>"text"
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
                value="{{$value}}"
                type="{{$type}}"
                {{$required}}
        />
    </div>
    @error($name)
        <p class="text-danger">
            {{$message}}
        </p>
    @enderror
</div>
