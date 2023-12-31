@props([
    "name"=>"",
    "label"=>"",
    "required"=>"", 
    "containerClass"=>"",
    "placeholder"=>"",
    'value'=>'',
    'type'=>'text'
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
        <input  type="{{$type}}" 
                class="form-control form-control-lg rounded" 
                id="{{$name}}"  
                name="{{$name}}"
                value="{{old($name,$value)}}"
                {{$required}}
        />
    </div>
    @error($name)
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
