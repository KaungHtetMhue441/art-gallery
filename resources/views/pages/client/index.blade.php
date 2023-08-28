<x-layouts.app>
    <x-slot name="header">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>
    <x-client.home.carousel :images="$images" />

    <x-client.home.grid-style-one.grid :artworks="$artworks" />

    <x-client.home.grid-style-two.grid :blogs="$blogs" />

    <x-client.home.exhibition.exhibition :exhibitions="$exhibitions"/>

    <x-slot name="script">
        <script type="module">
            const searchAll = (datas) => {
                const data = {
                    "title": datas,
                    "_token": "{{ csrf_token() }}",
                }
                $.ajax({
                    type: "POST",
                    url: "/search",
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        let artworks = response.data;
                        let searchItems = "";
                        artworks.map((item) => {
                            searchItems += 
                            `<a href="/art-works/${item.id}" class="list-group-item search-item hover-overlay list-group-item-action"> 
                                <img src="${item.image}" class="thumb-image">
                                Title- ${item.title},
                                Artist- ${item.artist},
                            </a>`;
                        })
                        document.cteateElen
                        $("#search_items").html(searchItems);
                        // console.log(artworks);
                    }
                });
            }

            $(document).ready(function() {
                $("#search").on('keyup', function() { 
                    if($(this).val()){
                        searchAll($(this).val());  
                    console.log("hello")

                        return;
                    }
                    $("#search_items").html("");
                });
            })
        </script>
        <script src="{{ asset('js/services.js') }}"></script>
        <script src="{{ asset('js/carousel.js') }}"></script>
        <script src="{{ asset('js/swiper-option.js') }}"></script>
    </x-slot>
</x-layouts.app>
