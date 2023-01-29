<x-layouts.admin title="Exhibitions">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            Exhibitions
            <a href="{{route('admin.exhibition.create')}}"class="btn btn-primary create" style="float:right"><i class="fa-solid fa-plus"></i> Create</a>
        </div>
        <div class="card-body">
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
                        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                        <a href=""  class="btn btn-danger text-white btn-sm"><i class="fa fa-trash"></i></a>
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