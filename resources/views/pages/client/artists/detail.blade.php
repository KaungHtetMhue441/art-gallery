<x-layouts.app>
    <x-slot name="header">
        <title>Artists | {{ $artist->name }}</title>
    </x-slot>

    <div class="container-fluid px-100 pt-3">
            {{-- @dd($artist->artWorks) --}}
            <div class="w-100 ratio rounded" style="height : 250px;z-index: -1;">
                @if($artist->artWorks->count()>0)
                    <img class="rounded" style="width: 100%; height: 100%; object-fit : cover" src="{{ $artist->artWorks[0]->cover_photo_url }}" alt="{{ $artist->artWorks[0]->title }}">
                @endif
            </div>
            <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="margin-top : -8%;z-index: 20;">
                <div class="rounded-circle overflow-hidden" style="width : 350px; height : 350px;"> 
                    <img class="object-fit-cover" width="100%" height="100%" src="{{ $artist->profile_image_url }}" alt="{{ $artist->name }}">
                </div>
                <h5 class="mt-2 fs-4  text_primary">{{ $artist->name }}</h5>
                <div>
                    <a href="{{ route('artists.index') . "?artist_type=" . $artist->artistType->name }}">
                        <span class="badge rounded-pill badge-primary text-capitalize bg_primary">{{ $artist->artistType->name }}</span>
                    </a>
                    <a href="{{ route('artists.index') . "?region=" . $artist->region->name }}">
                        <span class="badge rounded-pill badge-primary text-capitalize bg_primary">{{ $artist->region->name }}</span>
                    </a>
                </div>
                @forelse ($artist->social_url as $url)
                    <div class="mt-2">
                        <a target="_blank" href="{{ $url }}">
                            <span class="badge rounded-pill badge-secondary bg_primary">Social Link</span>
                        </a>
                    </div>
                @empty

                @endforelse
                <div class="col-12 text-justify" >
                    {!!$artist->bio!!}

                </div>
        </div>

        <x-client.common.title.left-title title="{{ $artist->name }} 's ArtWorks" />
        <div class="row pb-3">   
            @foreach ($artist->artWorks as $art)
                <div class="col-6 col-lg-3">
                    <x-client.art-works.art-card :artwork="$art" />
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>