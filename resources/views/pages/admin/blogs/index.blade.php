<x-layouts.admin title="Blogs">
<x-utils.card title="Blogs">
    <div class="row justify-content-end p-0">
        <div class="col-md-4 col-12 p-0 m-0">
            <a class="btn btn-outline-primary float-end mb-3 shadow" 
                href="{{route('admin.blog.create')}}">
                <i class="fa fa-plus-circle"></i> 
                Create Blog
            </a>    
        </div>
    </div>
    <div class="row">
        <div class="col-12 artist-table-container p-0 p-md-2">
        <table class="table table-striped shadow rounded" >
            <thead>
                <tr class="font-weight-bolder fs-5">
                    <th>No</th>
                    <th>Title</th>
                    <th>Descripton</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $index=>$blog)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{Str::words($blog->title_mm,2)}}</td>
                    <td>{!!Str::words($blog->description_mm,2)!!}</td>
                    <td>{{$blog->blogCategory->name}}</td>
                    <td>
                    <a href="{{route('admin.blog.edit',$blog->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <button class="btn text-white btn-danger" 
                        {{-- href="{{route('admin.artWork.delete',$artist->id)}}" --}}
                        onclick="return confirm('Are you sure to delete!')"
                        id = "delete-btn"
                        form="{{'form-delete'.$blog->id}}"
                        >
                        <i class="fa fa-trash"></i>
                    </button>
                    <form action="{{route('admin.blog.delete',$blog->id)}}" method="POST"
                        id = "{{'form-delete'.$blog->id}}"
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