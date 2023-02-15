@props(['title'])

<div class="page-breadcrumb py-0">
    <div class="row align-items-center p-0">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                    @foreach (explode('/',request()->getRequestUri()) as $page)
                    @if(!empty($page))
                        <li class="breadcrumb-item @if($loop->last) text-info @endif" aria-current="page">{{ ucfirst($page) }}</li>
                    @endif
                    @endforeach
                </ol>
            </nav>  
            {{-- <h1 class="mb-0 fw-bold">{{ $title }}</h1>  --}}
        </div>
    </div>
</div>      