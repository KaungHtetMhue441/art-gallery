
<x-layouts.admin title="Artwork Mediums">
    <x-utils.errors errors="{{join(',',$errors->all())}}"></x-utils.errors>
    <x-utils.card title="Artwork Medium Create Form">

      <x-utils.inputs.form  
      action="{{route('admin.artwork-mediums.store')}}" 
      method="post" 
      class="row g-3"
      >

      {{-- Artwork Medium Name --}}
      <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artwork Medium Name"
        required="required"
      />

      {{-- Button   --}}
      <x-utils.inputs.button/>

    </x-utils.inputs.form>
    </x-utils.card>

</x-layouts.admin>