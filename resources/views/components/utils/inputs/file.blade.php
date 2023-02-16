
@props([
    "name" => "",
    "label"=>"",
    "required"=>"",
    "id"=>"",
    "containerClass" => " ",
    "btnLabel" => "upload",
    "multiple" => " "
])

<div class="{{$containerClass}}">       
    <label for="{{$name}}" class="form-label ">{{$label}}</label>
    <div class="input-group rounded">
        <input type="file" class="form-control form-control-lg" id="{{!empty($id)?$id:$name}}" name="{{$name}}" {{$multiple}}>
        <label class="input-group-text mb-0"  id="{{$name}}">{{$btnLabel}}</label>
    </div>
    @error($name)
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>