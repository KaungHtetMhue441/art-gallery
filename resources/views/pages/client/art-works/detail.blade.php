<x-layouts.app>
    <x-slot name="header">
        <title>ArtWorks | {{ $artwork->title }}</title>
    </x-slot>

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 pe-lg-5 mb-3">
                <x-client.art-works.image-gallery :cover="$artwork->cover_photo" :images="$artwork->images" />
            </div>
            <div class="col-lg-6 pt-lg-5">
                <div class="row mb-3">
                    <div class="col-md-8">
                        <h1 class="fs-1 fw-bolder text-black">{{ $artwork->title }}</h1>
                        <p class="m-0 mb-2">{{ $artwork->category->name }}</p>

                        <p class="m-0 mb-1">Size : {{ $artwork->size }}</p>
                        <p class="m-0 mb-1">medium : {{ $artwork->medium }}</p>
                        <p class="m-0 mb-1">material : {{ $artwork->material }}</p>
                        <p class="m-0 mb-1">price : {{ $artwork->price }} {{ $artwork->currency }} </p>
                        <p class="m-0 mb-1">year : {{ $artwork->year }}</p>
                    </div>
                    <div class="col-md-4 pt-3 pt-md-5 d-flex">
                        <x-client.artists.rounded-artist-profile :artist="(object) ['id' => 1, 'name' => 'test', 'profile_image' => 'https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp']" size="100px" />
                    </div>
                </div>

                <p>{{ $artwork->description }}</p>
            </div>
        </div>

        <div class="row mb-5">
            <x-client.common.title.left-title title="You Might Also Like" />

            @foreach ($artworks as $artwork)
                <div class="col-sm-6 col-lg-3 mb-3">
                    <x-client.art-works.art-card :artwork="$artwork" />
                </div>
            @endforeach
            
        </div>
    </div>
</x-layouts.app>