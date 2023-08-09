<x-layouts.admin title="Exhibitions">
    <x-utils.card title="Exhibitions">
        <div class="row justify-content-end p-0">
            <div class="col-md-4 col-12 p-0 m-0">
                <a class="btn btn-outline-primary float-end mb-3 shadow" href="{{route('admin.exhibitions.create')}}">
                    <i class="fa fa-plus-circle"></i>
                    Create Exhibition
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 artist-table-container p-0 p-md-2">
                <table class="table table-striped shadow rounded">
                    <thead>
                        <tr class="font-weight-bolder fs-5">
                            <th>No</th>
                            <th>Title</th>
                            <th>Descripton</th>
                            <th>Exhibition Date</th>
                            <th>Exhibition Start Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exhibitions as $index=>$exhibition)
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{Str::words($exhibition->title_mm,3)}}</td>
                            <td>{{Str::words($exhibition->description_mm,5)}}</td>
                            <td>{{$exhibition->exhibition_date}}</td>
                            <td>{{$exhibition->exhibition_start_time}}</td>
                            <td>
                                <a href="{{route('admin.exhibitions.edit',$exhibition->id)}}"
                                    class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger text-white btn-sm"><i class="fa fa-trash"></i></a>
                                <a class="btn btn-outline-cyan"
                                    href="{{route('admin.exhibition.edit',$exhibition->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn text-white btn-danger"
                                    {{-- href="{{route('admin.exhibitions.delete',$exhibition->id)}}" --}}
                                    onclick="return confirm('Are you sure to delete!')" id="delete-btn"
                                    form="{{'form-delete'.$exhibition->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>
                                <form action="{{route('admin.exhibition.delete',$exhibition->id)}}" method="POST"
                                    id="{{'form-delete'.$exhibition->id}}">
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