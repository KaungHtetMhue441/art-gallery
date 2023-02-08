@props(['title'])

<div class="page-breadcrumb py-0">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href="{{ route('admin.index') }}" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                    @if (route('admin.index') != request()->url())
                        @foreach (explode('/',str_replace(route('admin.index').'/','',request()->url())) as $page)
                            <li class="breadcrumb-item @if($loop->last) text-info @endif" aria-current="page">{{ ucfirst($page) }}</li>
                        @endforeach
                    @endif
                </ol>
            </nav>  
        </div>
    </div>
</div>      