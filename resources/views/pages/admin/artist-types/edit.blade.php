
<x-layouts.admin title="Artist Type">
  <x-utils.card title="Artist Type Edit Form">

    <x-utils.inputs.form  
    action="{{route('admin.artist-types.update', $artistType->id)}}" 
    method="POST" 
    class="row g-3"
  >
    @method('PUT')

    {{-- Artist Type Name --}}
    <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artist Type Name"
        required="required"
        :value="$artistType->name"
      />
    
    @foreach ($errors->all() as $error )
      {{$error}}
    @endforeach

    {{-- Button   --}}
    <x-utils.inputs.button name="update" icon="fa-wrench"/>

  </x-utils.inputs.form>
  </x-utils.card>
</x-layouts.admin>