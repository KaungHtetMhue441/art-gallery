<x-layouts.admin title="Exhibitions">
    <x-utils.card title="Exhibition Edit Form">
        <x-utils.inputs.form   
          action="{{route('admin.exhibition.update',$exhibition->id)}}" 
          method="post" 
          class="row g-3 justify-content-center"
        >
        @method('PUT')
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          {{-- Exhibition Corver Image    --}}
          <x-utils.inputs.file  
            containerClass="col-12 col-md-12" 
            name="cover_photo" 
            label="Cover Photo"
            requiered="required"
          />
          {{-- Exhibition title    --}}
          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="title_mm" 
            label="Title MM"
            required="required"
            value="{{$exhibition->title_mm}}"
          />

          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="title_en" 
            label="Title EN"
            required="required"
            value="{{$exhibition->title_en}}"
          />

          {{-- Description--}}
          <x-utils.inputs.text-area 
            name="description_mm" 
            containerClass=" col-12 col-md-6" 
            label="Description MM"
            required="required"
            value="{{$exhibition->description_mm}}"
          />

          <x-utils.inputs.text-area 
            name="description_en" 
            containerClass=" col-12 col-md-6" 
            label="Description EN"
            required="required"
            value="{{$exhibition->description_en}}"
          />

          {{-- Exhibition Date  --}}
          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="exhibition_date" 
            label="Exhibition Date"
            required="required"
            type="date"
            value="{{$exhibition->exhibition_date}}"
          />

          {{-- Exhibition Start Time --}}
          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="exhibition_start_time" 
            label="Exhibition Start Time"
            required="required"
            value="{{$exhibition->exhibition_start_time}}"
          />

          {{-- Button   --}}
          <x-utils.inputs.button name="update" btnClass="float-end"/>

        </x-utils.inputs.form>
    </x-utils.card>
</x-layouts.admin>

<script>

</script>