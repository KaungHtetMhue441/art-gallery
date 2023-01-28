<x-layouts.admin title="Exhibition-Create">
    <form action="{{route('admin.exhibition.store')}}" method="GET" class="row g-3">
        @csrf
        <input type="hidden" name="user_id">
        <div class="col-md-6">
          <label for="title" class="form-label">Title MM <span class="text-danger">*</span></label>
          <input type="text" name="title_mm" class="form-control" id="">
        </div>
        <div class="col-md-6">
          <label for="title" class="form-label">Title EN <span class="text-danger">*</span></label>
          <input type="text" name="title_en" class="form-control" id="">
        </div>
        <div class="col-md-6">
          <label for="description_mm" class="form-label">Description MM <span class="text-danger">*</span></label>
          <textarea name="description_mm" id="" cols="5" rows="3" class="form-control"></textarea>
        </div>
        <div class="col-md-6">
          <label for="description_en" class="form-label">Description EN</label>
          <textarea name="description_en" id="" cols="5" rows="3" class="form-control"></textarea>
        </div>
        <div class="col-6">
          <label for="exhibition_date" class="form-label">Exhibition Date</label>
          <input type="date" name="exhibition_date" class="form-control">
        </div>
        <div class="col-6">
          <label for="exhibition_start_time" class="form-label">Exhibition Start Time</label>
          <input type="numer" name="exhibition_start_time" class="form-control">
        </div>
          <!-- <div class="row">
            <div class="col-6">
            <select class="form-control" name="" id="">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
                <option value="">11</option>
                <option value="">12</option>
            </select>
            </div>
            <div class="col-6">
            <select class="form-control" name="" id="">
                <option value="">AM</option>
                <option value="">PM</option>
            </select>
            </div>
          </div> -->
        <div class="col-6">
          <label for="cover_photo" class="form-label">Cover Photo</label>
          <input type="file" name ="cover_photo" class="form-control">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Create</button>
        </div>
    </form>
</x-layouts.admin>