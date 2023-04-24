
<x-layouts.admin title="Artwork Categories">
    <x-utils.errors errors="{{join(',',$errors->all())}}"></x-utils.errors>
    <x-utils.card title="Artwork Categories Create Form">

      <x-utils.inputs.form  
      action="{{route('admin.artwork-categories.store')}}" 
      method="post" 
      class="row g-3"
      >

      {{-- Artwork Category Name --}}
      <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artwork Category Name"
        required="required"
      />

      {{-- Button   --}}
      <x-utils.inputs.button/>

    </x-utils.inputs.form>
    </x-utils.card>

</x-layouts.admin>