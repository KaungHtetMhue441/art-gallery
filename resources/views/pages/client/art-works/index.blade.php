<x-layouts.app>
    <x-slot name="header">
        <title>ArtWorks</title>
    </x-slot>

    <x-slot name="script">
        <script>
            const artWorkSearchShow = $("#artwork_search_show");
            const artWorkSearchClose = $("#artwork_search_close");
            const artWorkSearchIcon = $("#artwork_search_icon");
            const artWorkSearch = $("#artwork_search");

            // artWorkSearchIcon.on("mousedown", (e) => {
            //     artWorkSearchIcon.on('pointermove',
            //         (e) => {
            //             if ("buttons" in e && e.buttons == 1) {
            //                 artWorkSearchIcon.css({
            //                     "top": e.clientY - 35,
            //                     "left": e.clientX - 35
            //                 });
            //                 // e.stopPropagation()
            //             }
            //         }
            //     )
            // })

            // artWorkSearchShow.on("mouseout", (e) => {
            //     $(window).on('pointermove', (e) => {
            //         e.stopPropagation()
            //     })
            // })


            artWorkSearchShow.click(function(e) {
                // console.log("hello");
                // console.log(artWorkSearch.height());
                // console.log(e.clientX, e.clientY);
                // if (e.clientX < artWorkSearch.width() / 2) {
                //     artWorkSearch.css({
                //         "right": 0 - (artWorkSearch.width() + 70),
                //     });
                // } else {
                //     artWorkSearch.css({
                //         "left": 410,
                //     });
                // }
                artWorkSearchShow.toggleClass("d-none");
                artWorkSearch.toggleClass("d-none");
                artWorkSearchClose.toggleClass("d-none");
            });
            artWorkSearchClose.click(() => {
                $("#artwork_search").toggleClass("d-none");
                artWorkSearchClose.toggleClass("d-none");
                artWorkSearchShow.toggleClass("d-none")
            });
        </script>
    </x-slot>

    <div class="container-fluid px-100 pt-3">
        <div class="row justify-content-between">
            <div class="col-6">
                <h1 class="text-muted  text-capitalize">ArtWorks</h1>
            </div>

            <div id="artwork_search_icon">
                <button class=" w-100 h-100 border rounded" id="artwork_search_show">
                    <i class="fa-solid fa-bars w-100"></i>
                    {{-- <img src="/assets/images/filter.svg" class="w-100" alt=""> --}}
                </button>
                <button id="artwork_search_close" class="w-100 h-100 rounded border d-none">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <div id="artwork_search" class="d-none rounded">
                    <h5>Filter</h5>
                    <form action="{{ route('artWorks.index') }}">
                        <select class="form-control mb-3" name="artist">
                            <option value="" selected>Choose artist</option>
                            @foreach ($artists as $artist)
                                <option value="{{ $artist->id }}"
                                    {{ request('artist') == $artist->id ? 'selected' : '' }}>
                                    {{ $artist->name }}</option>
                            @endforeach
                        </select>
                        <select class="form-control mb-3" name="category">
                            <option value="" disabled selected>Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request('category') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                        <select class="form-control mb-3" name="material">
                            <option value="" disabled selected>Choose Material</option>
                            @foreach ($materials as $material)
                                <option value="{{ $material->id }}"
                                    {{ request('material') == $material->id ? 'selected' : '' }}>
                                    {{ $material->name }}
                                </option>
                            @endforeach
                        </select>

                        <select class="form-control mb-3" name="medium">
                            <option value="" disabled selected>Choose Medium</option>
                            @foreach ($mediums as $medium)
                                <option value="{{ $medium->id }}"
                                    {{ request('medium') == $medium->id ? 'selected' : '' }}>
                                    {{ $medium->name }}
                                </option>
                            @endforeach
                        </select>

                        <input class="form-control mb-3" type="text" name="size" value="{{ request('size') }}"
                            placeholder="size">

                        <input class="form-control mb-3" type="text" name="price" value="{{ request('price') }}"
                            placeholder="Price">

                        <select id="typeEmail" class="form-control mb-3 " name="">
                            <option value="" disabled selected>Choose currency</option>
                            <option value="mmk">MMK</option>
                            <option value="us">US</option>
                        </select>

                        <button type="submit" class="btn btn-md btn-info">Search</button>
                        <a class="btn btn-md btn-info" href="{{ route('artWorks.index') }}">All</a>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-end">
            <div class="col-lg-12">

                <div class="row mb-5">

                    @forelse ($artworks as $artwork)
                        <div class="col-sm-6 col-lg-3 mb-3">
                            <x-client.art-works.art-card :artwork="$artwork" />
                        </div>
                    @empty
                        <h4 class="text-center">There are nothing to show!</h4>
                    @endforelse


                </div>
                <div class="row float-end">
                    {{ $artworks->links() }}

                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
