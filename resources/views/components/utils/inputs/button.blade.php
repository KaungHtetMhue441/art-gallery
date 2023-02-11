@props([
    "name"=>"Create",
    "containerClass"=>"",
    "icon"=>"fa-floppy-disk"
])
<div class="containerClass">
    <button type="submit" class="btn btn-lg btn-outline-primary shadow"><i class="fa-solid {{$icon}}"></i> {{$name}}</button>
</div>