<x-layouts.admin title="Artists">
    <x-utils.card title="Artists">
        <div class="row justify-content-end p-0">
            <div class="col-md-4 col-12 p-0 m-0">
                <a class="btn btn-outline-primary float-end mb-3 shadow" 
                    href="{{route('admin.artists.create')}}">
                    <i class="fa fa-plus-circle"></i> 
                    Create Artist
                </a>    
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 artist-table-container p-0 p-md-2">
            {{-- @dd(Storage::disk("public")->url('images/artists')) --}}
            <table class="table table-striped shadow rounded" >
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>Artist's Type</th>
                        <th>Region</th>
                        <th>Social Url</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                    <tr>
                        <td>
                            {{++$loop->index}}
                        </td>   
                        <td>
                            <div class="profile-image-container">
                                <img src="{{$artist->profile_image_url}}" 
                                    width="100%" 
                                    class="profile-image"
                                    />
                            </div>
                        </td>
                        <td>
                            {{$artist->name}}
                        </td>
                        <td>
                            {{$artist->artistType->name}}
                        </td>
                        <td>
                            {{$artist->region->name}}
                        </td>
                        <td>
                            <div class="row">
                                @foreach ($artist->social_url as $url)
                                <div class=" col-12 col-md-3">
                                    <a class="btn btn-outline-info" 
                                        href="{{$url}}"> 
                                        link{{++$loop->index}}
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-outline-cyan" 
                                href="{{route('admin.artWork.edit',$artist->id)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn text-white btn-danger" 
                                {{-- href="{{route('admin.artWork.delete',$artist->id)}}" --}}
                                onclick="return confirm('Are you sure to delete!')"
                                id = "delete-btn"
                                form="{{'form-delete'.$artist->id}}"
                                >
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('admin.artWork.delete',$artist->id)}}" method="POST"
                                id = "{{'form-delete'.$artist->id}}"
                                >
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </x-utils.card>
            

</x-layouts.admin>

<script>
    $(document).ready(function(){
        $("#delete-btn").click(function(){
            this.blur()
        })
    }) 
</script>