<x-layouts.admin title="Exhibition-Create">
    <x-utils.inputs.form 
      action="{{route('admin.exhibition.update',$exhibition->id)}}" 
      method="post" 
      class="row g-3"
    >
    <!-- Title -->
    <x-utils.inputs.input 
      containerClass="col-md-6" 
      name="title_mm" 
      label="Title MM"
      value="{{$exhibition->title_mm}}"
    />

    <x-utils.inputs.input 
      containerClass="col-md-6" 
      name="title_en" 
      label="Title EN"
      value="{{$exhibition->title_en}}"
    />

    <!-- Decsription -->
    <x-utils.inputs.text-area 
      name="description_mm" 
      containerClass="col-md-6" 
      label="Description MM"
      value="{{$exhibition->description_mm}}"
    />

    <x-utils.inputs.text-area 
      name="description_en" 
      containerClass="col-md-6" 
      label="Description EN"
      value="{{$exhibition->description_en}}"
    />

    <!-- Exhibiton Date -->
    <x-utils.inputs.input 
      name="exhibition_date" 
      containerClass="col-md-6" 
      label="Exhibition Date"
      type="date"
      value="{{$exhibition->exhibition_date}}"  
    />

    <!-- Exhibition Start Time -->
    <x-utils.inputs.input 
      name="exhibition_start_time" 
      containerClass="col-md-6" 
      label="Exhiibition Start Time"
      value="{{$exhibition->exhibition_start_time}}"
    />

    <!-- Cover Photo     -->
    <x-utils.inputs.file 
      containerClass="col-md-6" 
      name="cover_photo" 
      label="Cover Photo"
    />
    <x-utils.inputs.button
      name="update"
    />
    </x-utils.inputs.form>
</x-layouts.admin>