@php
    $index = ($artWorks->currentPage()-1)*10;
@endphp
<x-layouts.admin title="Artworks"   >
<x-utils.card title="ArtWork">
    <div class="row justify-content-end p-0">
        <div class="col-md-4 col-12 p-0 m-0">
            <a class="btn btn-outline-primary float-end mb-3 shadow" 
                href="{{route('admin.artwork.create')}}">
                <i class="fa fa-plus-circle"></i> 
                Create ArtWork
            </a>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 artist-table-container p-0 p-md-2 overflow-x-scroll">
            <table class="table table-striped shadow rounded" >
                <thead>
                    <tr class="font-weight-bolder fs-5">
                        <th style="width: 2%">No</th>
                        <th style="width: 100px">Action</th>
                        <th style="width: 4%">Title</th>
                        <th style="width: 5%">Artist</th>
                        <th>Cover photo</th>
                        <th style="width:30%">Other Images</th>
                        <th>Category</th>
                        <th>Size</th>
                        <th>Medium</th>
                        <th>Material</th>
                        <th>Price</th>
                        <td>Currency</td>
                        <th>year</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artWorks as $artWork )
                        <tr>
                            <td>
                                {{++$index}}
                            </td>
                            <td>
                                <div class="d-flex justify-between gap-1">
                                    <a class="btn btn-outline-cyan" 
                                    href="{{route('admin.artwork.edit',$artWork->id)}}">
                                <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn text-white btn-danger" 
                                    href="{{route('admin.artwork.delete',$artWork->id)}}"
                                    onclick="return confirm('Are you sure to delete!')"
                                    id = "delete-btn"
                                    form="{{'form-delete'.$artWork->id}}"
                                    >
                                    <i class="fa fa-trash"></i>
                                </button>
                                <form action="{{route('admin.artwork.delete',$artWork->id)}}" method="POST"
                                    id = "{{'form-delete'.$artWork->id}}"
                                    >
                                    @csrf
                                    @method('DELETE')
                                </form>
                                </div>
                            </td>
                            <td>
                                {{Str::words($artWork->title,4,"...")}}
                            </td>
                            <td>
                                {{$artWork->artist_id}}
                            </td>
                            <td>
                                <a href="{{$artWork->cover_photo_url}}" class="btn btn-outline-success">see</a>
                            </td>
                            <td>
                                <div class="row gap-1" style="width: 280px;">
                                    @foreach ($artWork->images_with_url as $image)
                                        <div class="col-3">
                                            <a href="{{$image->name}}" class="btn btn-outline-success">img({{++$loop->index}})</a>
                                        </div>
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                {{$artWork->category->name}}
                            </td>
                            <td>
                                {{$artWork->size}}
                            </td>
                            <td>
                                {{$artWork->medium->name}}
                            </td>
                            <td>
                                {{$artWork->material->name}}
                            </td>
                            <td>
                                {{$artWork->price}}
                            </td>
                            <td>
                                {{$artWork->currency}}
                            </td>
                            <td>
                                {{$artWork->year}}
                            </td>
                            <td>
                                {{Str::words(strip_tags($artWork->description),5,"...")}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$artWorks->links()}}
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