<x-layouts.app>
    <x-slot name="header">
        <title>Artists</title>
    </x-slot>
    <div class="container-fluid px-100">
        <x-client.common.title.left-title :title="$title">
            <form action="{{ route('artWorks.index') }}">
                <div class="row justify-content-end p-0">
                    <div class="col-3 pb-0">
                        <input class="form-control form-control-inline" type="text" name="size" value="{{ request('size') }}" placeholder="size" />
    
                    </div>
                    <div class="col-3 pb-0">
                        <select class="form-control" name="artist">
                            <option value="" selected>Choose artist's type</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"
                                    {{ request('artist') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>  
                    {{-- <div class="col-2 pb-0"> --}}
                        <div style="width: 200px">
                            <button type="submit" class="btn btn-md btn_primary text-secondary-color">Search</button>
                            <a class="btn btn-md btn_primary "href="{{ route('artWorks.index') }}">All</a>      
                        </div>  
                    {{-- </div>   --}}
                </div>
            </form>
        </x-client.common.title.left-title>
            {{-- <h5>Filter</h5> --}}

            <div class="row border-bottom">
                    <div class="row justify-content-between">
                        @foreach ($artists as $artist)
                        <x-client.artists.rounded-artist-profile :artist="$artist" size="380px" />
                         @endforeach
                    </div>
            </div>
            <div class="d-inline-block float-end mt-3">
                {{$artists->links()}}
            </div>
    </div>

</x-layouts.app>