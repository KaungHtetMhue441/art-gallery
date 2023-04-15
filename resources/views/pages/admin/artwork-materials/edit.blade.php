
<x-layouts.admin title="Artwork Materials">
  <x-utils.card title="Artwork Material Edit Form">

    <x-utils.inputs.form  
    action="{{route('admin.artwork-materials.update', $artworkMaterial->id)}}" 
    method="POST" 
    class="row g-3"
  >
    @method('PUT')

    {{-- Artwork Material Name --}}
    <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artwork Material Name"
        required="required"
        :value="$artworkMaterial->name"
      />
    
    @foreach ($errors->all() as $error )
      {{$error}}
    @endforeach

    {{-- Button   --}}
    <x-utils.inputs.button name="update" icon="fa-wrench"/>

  </x-utils.inputs.form>
  </x-utils.card>
</x-layouts.admin>