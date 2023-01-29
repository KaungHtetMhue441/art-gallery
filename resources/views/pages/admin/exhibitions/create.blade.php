<x-layouts.admin title="Exhibition-Create">
    <x-utils.inputs.form 
      action="{{route('admin.exhibition.store')}}" 
      method="post" 
      class="row g-3"
    >

    <!-- Title -->
    <x-utils.inputs.input 
      containerClass="col-md-6" 
      name="title_mm" 
      label="Title MM"
    />

    <x-utils.inputs.input 
      containerClass="col-md-6" 
      name="title_en" 
      label="Title EN"
    />

    <!-- Decsription -->
    <x-utils.inputs.text-area 
      name="description_mm" 
      containerClass="col-md-6" 
      label="Description MM"
    />

    <x-utils.inputs.text-area 
      name="description_en" 
      containerClass="col-md-6" 
      label="Description EN"
    />

    <!-- Exhibiton Date -->
    <div class="col-6">
      <label for="exhibition_date" class="form-label">Exhibition Date</label>
      <input type="date" name="exhibition_date" class="form-control">
    </div>

    <!-- Exhibition Start Time -->
    <x-utils.inputs.input 
      name="exhibition_start_time" 
      containerClass="col-md-6" 
      label="Exhiibition Start Time"
    />

    <!-- Cover Photo     -->
    <x-utils.inputs.file 
      containerClass="col-md-6" 
      name="cover_photo" 
      label="Cover Photo"
    />
    <x-utils.inputs.button/>
    </x-utils.inputs.form>
</x-layouts.admin>