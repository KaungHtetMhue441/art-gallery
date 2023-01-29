@props([
    "name"=>"",
    "label"=>"",
    "required"=>"", 
    "containerClass"
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
        <input  type="text" 
                class="form-control form-control-lg rounded" 
                id="{{$name}}"  
                name="{{$name}}"
                {{$required}}
        />
    </div>
</div>
