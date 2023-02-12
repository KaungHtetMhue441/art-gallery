<x-layouts.app>
    <x-slot name="header">
        <title>{{ $artist->name }}</title>
    </x-slot>

    <div class="container">
        <div>
            <div class="w-100 ratio rounded" style="height : 300px;z-index: -1;">
                <img class="object-fit-cover rounded" src="{{ $artist->artWorks[0]->cover_photo }}" alt="{{ $artist->artWorks[0]->title }}">
            </div>
            <div class="w-100 d-flex flex-column justify-content-center align-items-center" style="margin-top : -8%;z-index: 20;">
                <div class="rounded-circle overflow-hidden" style="width : 200px; height : 200px;"> 
                    <img class="object-fit-cover" width="100%" height="100%" src="{{ $artist->profile_image }}" alt="{{ $artist->name }}">
                </div>
                <h5 class="mt-2 fs-4 text-muted">{{ $artist->name }}</h5>
                <div>
                    <a href="{{ route('artists.index') . "?artist_type=" . $artist->artistType->name }}">
                        <span class="badge rounded-pill badge-primary text-capitalize">{{ $artist->artistType->name }}</span>
                    </a>
                    <a href="{{ route('artists.index') . "?region=" . $artist->region->name }}">
                        <span class="badge rounded-pill badge-primary text-capitalize">{{ $artist->region->name }}</span>
                    </a>
                </div>
                <div class="mt-2">
                    <a target="_blank" href="{{ $artist->social_url }}">
                        <span class="badge rounded-pill badge-primary">Social Link</span>
                    </a>
                </div>
            </div>
        </div>

        <x-client.common.title.left-title title="{{ $artist->name }} 's ArtWorks" />
        <div class="row pb-3">   
            @foreach ($artist->artWorks as $art)
                <div class="col-6 col-lg-3">
                    <x-client.art-works.art-card />
                </div>
            @endforeach
        </div>
    </div>

</x-layouts.app>