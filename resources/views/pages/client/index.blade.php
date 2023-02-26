<x-layouts.app>
    <x-slot name="header">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>

    <x-client.home.video-section />
    
    <section class="container py-3">
      <p class="text-center fs-5">Our team brings you an art gallery of contemporary art pieces by emerging artists from Myanmar to help you find your dream piece with ease.
        Learn about what motivates us in our <a href="#">about us</a> page!</p>
    </section>

    <x-client.home.grid-style-one.grid />

    <x-client.home.grid-style-two.grid />

    <x-client.home.exhibition.exhibition />

</x-layouts.app>