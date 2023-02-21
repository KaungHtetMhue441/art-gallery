<x-layouts.admin title="Artworks"   >
<x-utils.card title="ArtWork">
    <div class="row justify-content-end p-0">
        <div class="col-md-4 col-12 p-0 m-0">
            <a class="btn btn-outline-primary float-end mb-3 shadow" 
                href="{{route('admin.artWork.create')}}">
                <i class="fa fa-plus-circle"></i> 
                Create ArtWork
            </a>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 artist-table-container p-0 p-md-2">
        <table class="table table-striped shadow rounded" >
            <thead>
                <tr class="font-weight-bolder fs-5">
                    <th style="width: 2%">No</th>
                    <th style="width: 4%">Title</th>
                    <th style="width: 5%">Artist</th>
                    <th>Cover photo</th>
                    <th>Other Images</th>
                    <th>Category</th>
                    <th>Size</th>
                    <th>Medium</th>
                    <th>Material</th>
                    <th>Price</th>
                    <td>Currency</td>
                    <th>year</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artWorks as $artWork )
                    <tr>
                        <td>
                            {{++$loop->index}}
                        </td>
                        <td>
                            {{$artWork->title}}
                        </td>
                        <td>
                            {{$artWork->artist_id}}
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            {{$artWork->art_work_category_id}}
                        </td>
                        <td>
                            {{$artWork->size}}
                        </td>
                        <td>
                            {{$artWork->medium}}
                        </td>
                        <td>
                            {{$artWork->material}}
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
                            {{$artWork->description}}
                        </td>
                        <td>
                            <a class="btn btn-outline-cyan" 
                                href="{{route('admin.artWork.edit',$artWork->id)}}">
                            <i class="fa fa-edit"></i>
                            </a>
                            <button class="btn text-white btn-danger" 
                                href="{{route('admin.artWork.delete',$artWork->id)}}"
                                onclick="return confirm('Are you sure to delete!')"
                                id = "delete-btn"
                                form="{{'form-delete'.$artWork->id}}"
                                >
                                <i class="fa fa-trash"></i>
                            </button>
                            <form action="{{route('admin.artWork.delete',$artWork->id)}}" method="POST"
                                id = "{{'form-delete'.$artWork->id}}"
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