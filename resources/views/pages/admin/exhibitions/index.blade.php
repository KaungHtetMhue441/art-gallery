<x-layouts.admin title="Exhibitions">
    <!-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif -->
    <div class="card">
        <div class="card-header">
            Exhibitions
        </div>
        <div class="card-body">
            <div class="row justify-content-end p-0">
                <div class="col-md-4 col-12 p-0 m-0">
                    <a class="btn btn-outline-primary float-end mb-3 shadow" 
                        href="{{route('admin.exhibitions.create')}}">
                        <i class="fa fa-plus-circle"></i> 
                        Create Exhibition
                    </a>    
                </div>
            </div>
            <div class="row">

            </div>
            <table class="table table-striped table-responsive">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Descripton</th>
                        <th>Exhibition Date</th>
                        <th>Exhibition Start Time</th>
                        <th>Action</th>
                    </tr>
                    @foreach($exhibitions as $index=>$exhibition)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$exhibition->title_mm}}</td>
                        <td>{{$exhibition->description_mm}}</td>
                        <td>{{$exhibition->exhibition_date}}</td>
                        <td>{{$exhibition->exhibition_start_time}}</td>
                        <td>
                        <a href="{{route('admin.exhibitions.edit',$exhibition->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href=""class="btn btn-danger text-white btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <script>
        
    </script>
</x-layouts.admin>