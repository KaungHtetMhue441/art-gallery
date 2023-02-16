<x-layouts.admin title="Exhibitions">
    <x-utils.card title="Create Exhibition">
        <x-utils.inputs.form   
          action="{{route('admin.exhibition.store')}}" 
          method="post" 
          class="row g-3 justify-content-center"
        >
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
          />

          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="title_en" 
            label="Title EN"
            required="required"
          />

          {{-- Description--}}
          <x-utils.inputs.text-area 
            name="description_mm" 
            containerClass=" col-12 col-md-6" 
            label="Description MM"
            required="required"
          />

          <x-utils.inputs.text-area 
            name="description_en" 
            containerClass=" col-12 col-md-6" 
            label="Description EN"
            required="required"
          />

          {{-- Exhibition Date  --}}
          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="exhibition_date" 
            label="Exhibition Date"
            required="required"
            type="date"
          />

          {{-- Exhibition Start Time --}}
          <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="exhibition_start_time" 
            label="Exhibition Start Time"
            required="required"
          />

          {{-- Button   --}}
          <x-utils.inputs.button btnClass="float-end"/>

        </x-utils.inputs.form>
    </x-utils.card>
</x-layouts.admin>

<script>

</script>