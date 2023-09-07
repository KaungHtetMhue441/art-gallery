<x-layouts.app>
    <x-slot name="header">
        <title>Exhibitions</title>
    </x-slot>

    <div class="container">
        <x-client.common.title.left-title title="Exhibitions" />
        @foreach ($exhibitions as $exhibition)

        @php
            $rowReverse = $loop->index%2>0;
        @endphp

          <x-client.exhibitions.exhibition-card :exhibition="$exhibition" :rowReverse="$rowReverse"/>
        @endforeach
        {{-- <x-client.exhibitions.exhibition-card />
        <x-client.exhibitions.exhibition-card /> --}}
        
        <nav class="mt-2">
            {{$exhibitions->links()}}
        </nav>
    </div>

</x-layouts.app>