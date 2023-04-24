
<x-layouts.admin title="Artist Type">
    <x-utils.errors errors="{{join(',',$errors->all())}}"></x-utils.errors>
    <x-utils.card title="Artist Type Create Form">

      <x-utils.inputs.form  
      action="{{route('admin.artist-types.store')}}" 
      method="post" 
      class="row g-3"
      >

      {{-- Artist Type Name --}}
      <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artist Type Name"
        required="required"
      />

      {{-- Button   --}}
      <x-utils.inputs.button/>

    </x-utils.inputs.form>
    </x-utils.card>

</x-layouts.admin>