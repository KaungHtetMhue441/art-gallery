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
                
            </tbody>
        </table>
        </div>
    </div>
</x-utils.card>
</x-layouts.admin>