
<x-layouts.admin title="Artwork Mediums">
  <x-utils.card title="Artwork Medium Edit Form">

    <x-utils.inputs.form  
    action="{{route('admin.artwork-mediums.update', $artworkMedium->id)}}" 
    method="POST" 
    class="row g-3"
  >
    @method('PUT')

    {{-- Artwork Medium Name --}}
    <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artwork Medium Name"
        required="required"
        :value="$artworkMedium->name"
      />
    
    @foreach ($errors->all() as $error )
      {{$error}}
    @endforeach

    {{-- Button   --}}
    <x-utils.inputs.button name="update" icon="fa-wrench"/>

  </x-utils.inputs.form>
  </x-utils.card>
</x-layouts.admin>