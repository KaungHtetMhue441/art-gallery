
<x-layouts.admin title="Image Slider">
    <x-utils.card title="Image Slider">
        <div class="row justify-content-end p-0">
            <div class="col-md-4 col-12 p-0 m-0">
                <a class="btn btn-outline-primary float-end mb-3 shadow" 
                    href="{{route('admin.image-slider.create')}}">
                    <i class="fa fa-plus-circle"></i> 
                    Create Image
                </a>    
            </div>
        </div>
        <div class="row">
            <div class="col-12 artist-table-container p-0 p-md-2">
            <table class="table table-striped shadow rounded" >
                <thead>
                    <tr class="font-weight-bolder fs-5">
                        <th>No</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($images as $index => $image)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>
                                <img src="{{$image->image_url}}" alt="{{$image->name}}" width="100">
                            </td>
                            <td>{{$image->name}}</td>
                            <td>{{$image->description ? $image->description : '-' }}</td>
                            <td>
                            <a class="btn btn-outline-cyan" 
                                    href="{{route('admin.image-slider.edit',$image->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn text-white btn-danger" 
                                    {{-- href="{{route('admin.image.delete',$image->id)}}" --}}
                                    onclick="return confirm('Are you sure to delete!')"
                                    id = "delete-btn"
                                    form="{{'form-delete'.$image->id}}"
                                    >
                                    <i class="fa fa-trash"></i>
                                </button>
                                <form action="{{route('admin.image-slider.destroy',$image->id)}}" method="POST"
                                    id = "{{'form-delete'.$image->id}}"
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