<x-layouts.app>
    <x-slot name="header">
        <title>ArtWorks</title>
    </x-slot>

    <div class="container">
        <x-client.common.title.left-title title="Artworks" />

        <div class="row">
            <div class="col-lg-3 mb-3 mb-lg-0">
                <h5>Filter</h5>
                <form action="{{route('artWorks.index')}}">
                    <select class="form-control mb-3" name="artist">
                        <option value="" selected>Choose artist</option>
                        @foreach ( $artists as $artist )
                            <option value="{{$artist->id}}" {{request('artist')==$artist->id?"selected":""}}>{{$artist->name}}</option>

                        @endforeach
                    </select>
                    <select class="form-control mb-3" name="category">
                        <option value="" disabled selected>Choose Category</option>
                        @foreach ($categories as $category)
                            <option 
                                value="{{$category->id}}" 
                                {{request('category')==$category->id?"selected":""}}>
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>

                    <input 
                    class="form-control mb-3" 
                    type="text" name="size" 
                    value="{{request('size')}}"
                    placeholder="size"
                    >

                    <input 
                    class="form-control mb-3" 
                    type="text" name="price" 
                    value="{{request('size')}}"
                    placeholder="Price"
                    >

                    <select id="typeEmail" class="form-control mb-3 " name="">
                        <option value="" disabled selected>Choose currency</option>
                        <option value="mmk">MMK</option>
                        <option value="us">US</option>
                    </select>

                    <button type="submit" class="btn btn-md btn-primary">Search</button>
                </form>
            </div>
            <div class="col-lg-9">
                <div class="row mb-5">

                    @forelse ($artworks as $artwork)
                        <div class="col-sm-6 col-lg-4 mb-3">
                            <x-client.art-works.art-card 
                            :artwork="$artwork"
                            />
                        </div>
                    @empty
                        <h4 class="text-center">There are nothing to show!</h4>
                    @endforelse
                    
                </div>
            </div>
        </div>
        
    </div>
</x-layouts.app>