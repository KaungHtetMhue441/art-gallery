@php
    $index = ($artistTypes->currentPage()-1)*10;
@endphp
<x-layouts.admin title="Artist Types">
    <x-utils.card title="Artist Types">
        <div class="row justify-content-end p-0">
            <div class="col-md-4 col-12 p-0 m-0">
                <a class="btn btn-outline-primary float-end mb-3 shadow" 
                    href="{{route('admin.artist-types.create')}}">
                    <i class="fa fa-plus-circle"></i> 
                    Create Artist Type
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
                    @foreach($artistTypes as $index => $artistType)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$artistType->name}}</td>
                            <td>
                                <a class="btn btn-outline-cyan" 
                                        href="{{route('admin.artist-types.edit',$artistType->id)}}">
                                        <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn text-white btn-danger" 
                                    onclick="return confirm('Are you sure to delete!')"
                                    id = "delete-btn"
                                    form="{{'form-delete'.$artistType->id}}"
                                    >
                                        <i class="fa fa-trash"></i>
                                </button>
                                <form action="{{route('admin.artist-types.destroy',$artistType->id)}}" method="POST"
                                    id = "{{'form-delete'.$artistType->id}}"
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
                {{$artistTypes->links()}}
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