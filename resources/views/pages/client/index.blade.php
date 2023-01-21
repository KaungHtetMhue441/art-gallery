<x-layouts.app>
    <x-slot name="header">
        <title>Home</title>
    </x-slot>

    <h1>Client</h1>

    <x-cards.base-card 
        :title="$title" 
        :body="$body" 
        :url="$url" 
        :image="$image"
    />

</x-layouts.app>