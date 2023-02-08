<x-layouts.admin title="Artists">
    <div class="row">
        
    </div>
    <div class="card">
        <div class="card-header text-center">
            <h3><b>Artists</b></h3>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- @dd(Storage::disk("public")->url('images/artists')) --}}
                @foreach ($artists as $artist)
                
                    <div class="col-4">
                        <x-cards.base-card  image="{{$artist->profile_image}}" 
                                            title="{{$artist->name}}"
                                            >
                        </x-cards.base-card>
                    </div>  
                @endforeach
                
            </div>
        </div>  
    </div>
</x-layouts.admin>