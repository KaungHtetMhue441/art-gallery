@props([
    "errors"=>""
])

@if(!empty($errors))
    @foreach (explode(',',$errors) as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> 
    @endforeach
@endif

