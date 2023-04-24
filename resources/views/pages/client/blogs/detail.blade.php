<x-layouts.app>
    <x-slot name="header">
        <title>Blogs | {{ $blog->title_en }}</title>
    </x-slot>

    <div class="container">
        <div class="w-100 d-flex flex-column justify-content-start align-items-center">
            <div class="ratio ratio-16x9 w-75 d-flex justify-content-center align-items-start p-2 rounded">
                <img class="object-fit-cover rounded" src="{{asset('storage/blogs/'.$blog->cover_photo)}}" alt="">
            </div>

            <div class="w-75 py-3">
                <h1 class="fs-1 fw-bold text-center">{{ $blog->title_en }}</h1>

                <h5 class="text-center mt-4">                    
                    <span class="badge badge-primary text-capitalize">category - as {{$blog->blogCategory->name}}</span>
                </h5>

                <div class="p-3">
                    {!! $blog->description_mm !!}
                </div>

                @if($blog->images)
                <div class="fotorama rounded" data-allowfullscreen="true" data-nav="thumbs" data-swipe="true">
                    <a href="{{asset('storage/blogs/'.$blog->cover_photo)}}" data-thumb="1_thumb.jpg"></a>
                    @foreach ($blog->images as $key => $image)
                        <a href="{{asset('storage/blogs/'.$image['name'])}}" data-thumb="{{$key}}_thumb.jpg"></a>
                    @endforeach
                </div>
                @endif
                {{-- <div class="py-3 d-flex flex-column justify-content-center align-items-start">
                    <h3 class="text-center fs-6">Tags</h3>
                    <div>
                        <span class="badge rounded-pill badge-success text-capitalize me-3">as asd</span>
                        <span class="badge rounded-pill badge-success text-capitalize">cv sd</span>
                    </div>
                </div> --}}
            </div>
        </div>

        <x-client.home.grid-style-two.grid :blogs="$blogs" />

    </div>
</x-layouts.app>