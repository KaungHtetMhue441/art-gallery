
<x-layouts.admin title="Image Slider">
  <x-utils.card title="Image Edit Form">

    <div class="col-12">
      <div class="cover-photo-preview rounded-md border border-cyan shadow shadow-2xl mx-auto mb-3 overflow-hidden d-flex justify-content-center align-items-center">
        <img  
        src="{{ $image->image_url }}"
        id='profile_image_placeholder' 
        class="w-100" 
        alt="{{ $image->name }}"
        >
      </div>
    </div>

    <x-utils.inputs.form  
    action="{{route('admin.image-slider.update', $image->id)}}" 
    method="POST" 
    class="row g-3"
  >
    @method('PUT')

    {{-- Image --}}
    <x-utils.inputs.file  
    containerClass="col-12 col-md-6" 
    name="image" 
    label="Image"
    />

    {{-- Image's Description --}}
    <x-utils.inputs.text-area 
    name="description" 
    containerClass="col-12 col-md-6" 
    label="Description"
    :value="$image->description"
    />
    
    @foreach ($errors->all() as $error )
      {{$error}}
    @endforeach

    {{-- Button   --}}
    <x-utils.inputs.button name="update" icon="fa-wrench"/>

  </x-utils.inputs.form>
  </x-utils.card>
</x-layouts.admin>


<script>
  $(document).ready(function (){
    $('#profile_image').change(function(){
        $('#profile_image_placeholder').prop('src',window.URL.createObjectURL(this.files[0]));
        console.log(window.URL.createObjectURL(this.files[0]));
    })
  })
</script>