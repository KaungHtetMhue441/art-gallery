<x-layouts.admin title="Exhibitions"   >
    <div class="card">
        <div class="card-header">
            Exhibitions
            <a href="{{route('admin.exhibition.create')}}"class="btn btn-primary" style="float:right"><i class="fa-solid fa-plus"></i> Create</a>
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
                        <th></th>
                    </tr>
                    <tr>
                        <td>1s</td>
                        <td>Testing</td>
                        <td>Testing</td>
                        <td>28-1-2022</td>
                        <td>9:00AM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.admin>