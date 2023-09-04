@php
    $index = ($artworkCategories->currentPage()-1)*10;
@endphp
<x-layouts.admin title="Artwork Categories">
    <x-utils.card title="Artwork Categories">
        <div class="row justify-content-end p-0">
            <div class="col-md-4 col-12 p-0 m-0">
                <a class="btn btn-outline-primary float-end mb-3 shadow" 
                    href="{{route('admin.artwork-categories.create')}}">
                    <i class="fa fa-plus-circle"></i> 
                    Create Artwork Category
                </a>    
            </div>
        </div>
        <div class="row">
            <div class="col-12 artist-table-container p-0 p-md-2">
            <table class="table table-striped shadow rounded" >
                <thead>
                    <tr class="font-weight-bolder fs-5">
                        <th>No</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artworkCategories as $index => $artworkCategory)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$artworkCategory->name}}</td>
                            <td>
                                <a class="btn btn-outline-cyan" 
                                        href="{{route('admin.artwork-categories.edit',$artworkCategory->id)}}">
                                        <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn text-white btn-danger" 
                                    onclick="return confirm('Are you sure to delete!')"
                                    id = "delete-btn"
                                    form="{{'form-delete'.$artworkCategory->id}}"
                                    >
                                        <i class="fa fa-trash"></i>
                                </button>
                                <form action="{{route('admin.artwork-categories.destroy',$artworkCategory->id)}}" method="POST"
                                    id = "{{'form-delete'.$artworkCategory->id}}"
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
            <div class="d-inline-block">
                {{$artworkCategories->links()}}
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