<x-layouts.app>
    <x-slot name="header">
        <title>Artists</title>
    </x-slot>
    <div class="container">
        <x-client.common.title.left-title :title="$title" />

        <div class="row">
            @foreach ($artists as $artist)
                <x-client.artists.rounded-artist-profile :artist="$artist" />
            @endforeach
        </div>
    </div>

</x-layouts.app>