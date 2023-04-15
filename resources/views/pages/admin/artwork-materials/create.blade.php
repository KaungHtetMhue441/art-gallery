
<x-layouts.admin title="Artwork Materials">
    <x-utils.errors errors="{{join(',',$errors->all())}}"></x-utils.errors>
    <x-utils.card title="Artwork Material Create Form">

      <x-utils.inputs.form  
      action="{{route('admin.artwork-materials.store')}}" 
      method="post" 
      class="row g-3"
      >

      {{-- Artwork Material Name --}}
      <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artwork Material Name"
        required="required"
      />

      {{-- Button   --}}
      <x-utils.inputs.button/>

    </x-utils.inputs.form>
    </x-utils.card>

</x-layouts.admin>