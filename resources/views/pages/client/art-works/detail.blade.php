<x-layouts.app>
    <x-slot name="header">
        <title>ArtWorks | {{ $artwork->title }}</title>
    </x-slot>

    <div class="container-fluid px-100 mt-5">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-6 pe-lg-5 mb-5 pt-2">
                <x-client.art-works.image-gallery :cover="$artwork->cover_photo_url" :images="$artwork->images_with_url" />
            </div>
            <div class="col-5 mt-2">
                <div class="row">
                    <h5 class="text_primary p-0 mb-3">{{$artwork->title }}</h5>
                    <table class="table table-hover artwork-table bottom-3  table-striped w-100 mt-2 artwork-table-details">
                        <tr>
                            <td style="width: 20%;">Category</td>
                            <td style="width: 5%">:</td>
                            <td>{{ $artwork->category->name }}</td>
                        </tr>
                        <tr>
                            <td>Artist</td>
                            <td>:</td>
                            <td>
                                <a href="{{ route('artists.show', ['artist' => $artwork->artist->id]) }}" class="text-decoration-none badge bg_primary cololr link-dark ">
                                {{$artwork->artist->name}}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Size </td>
                            <td>:</td>
                            <td>{{ $artwork->size }}</td>
                        </tr>
                        <tr>
                            <td>Medium</td>
                            <td>:</td>
                            <td>{{ $artwork->medium->name }}</td>
                        </tr>
                        <tr>
                            <td>Material </td>
                            <td>:</td>
                            <td>{{ $artwork->material->name }}</td>
                        </tr>
                        <tr>
                            <td>Year </td>
                            <td>:</td>
                            <td>{{ $artwork->year }}</td>
                        </tr>
                        <tr>
                            <td>Price </td>
                            <td>:</td>
                            <td>{{ $artwork->price }} {{ $artwork->currency }}</td>
                        </tr>
                    </table>
                        {{-- <p class="m-0 mb-2">{{ $artwork->category->name }}</p>
                        <a href="{{ route('artists.show', ['artist' => $artwork->artist->id]) }}" class="text-decoration-none cololr link-dark ">
                            {{$artwork->artist->name}}
                        </a>
                        <p class="m-0 mb-1">Size : {{ $artwork->size }}</p>
                        <p class="m-0 mb-1">Medium : {{ $artwork->medium->name }}</p>
                        <p class="m-0 mb-1">Material : {{ $artwork->material->name }}</p>
                        <p class="m-0 mb-1">Price : {{ $artwork->price }} {{ $artwork->currency }} </p>
                        <p class="m-0 mb-1">Year : {{ $artwork->year }}</p> --}}
                    {{-- <div class="col-md-4 d-flex">
                        <x-client.artists.rounded-artist-profile :artist="$artwork->artist" size="200px" />
                    </div> --}}
                </div>
                <hr>

                <dl>
                    <dd> &nbsp; &nbsp;  {!! $artwork->description !!}</dd>
                </dl>
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

The Mona Lisa is a half-length portrait painting by the Italian artist Leonardo da Vinci. It is considered an archetypal masterpiece of the Italian Renaissance,
and has been described as the best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world.
The painting novel qualities include the subjects expression, which is frequently described as enigmatic, the monumentality of the composition,
the subtle modelling of forms, and the atmospheric illusionism. The painting is likely of the Italian noblewoman Lisa Gherardini, the wife of Francesco del Giocondo,
and is in oil on a white Lombardy poplar panel. It had been believed to have been painted between 1503 and 1506; however, Leonardo may have continued working on it as late as 1517.
Recent academic work suggests that it would not have been started before 1513. It was acquired by King Francis I of France and is now the property of the French Republic itself,
on permanent display at the Louvre Museum in Paris since 1797.
