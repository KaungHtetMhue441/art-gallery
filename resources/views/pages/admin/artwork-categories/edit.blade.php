
<x-layouts.admin title="Artwork Categories">
  <x-utils.card title="Artwork Categories Edit Form">

    <x-utils.inputs.form  
    action="{{route('admin.artwork-categories.update', $artworkCategory->id)}}" 
    method="POST" 
    class="row g-3"
  >
    @method('PUT')

    {{-- Artwork Category Name --}}
    <x-utils.inputs.input 
        containerClass="col-12" 
        name="name" 
        label="Artwork Category Name"
        required="required"
        :value="$artworkCategory->name"
      />
    
    @foreach ($errors->all() as $error )
      {{$error}}
    @endforeach

    {{-- Button   --}}
    <x-utils.inputs.button name="update" icon="fa-wrench"/>

  </x-utils.inputs.form>
  </x-utils.card>
</x-layouts.admin>