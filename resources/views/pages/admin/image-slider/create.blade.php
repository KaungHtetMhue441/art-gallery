
<x-layouts.admin title="Image Slider">
    <x-utils.errors errors="{{join(',',$errors->all())}}"></x-utils.errors>
    <x-utils.card title="Image Create Form">
      <div class="col-12">
        <div class="cover-photo-preview rounded-md border border-cyan shadow shadow-2xl mx-auto mb-3 overflow-hidden d-flex justify-content-center align-items-center">
          <img id='profile_image_placeholder' class="w-100" alt="">
        </div>
      </div>

      <x-utils.inputs.form  
      action="{{route('admin.image-slider.store')}}" 
      method="post" 
      class="row g-3"
    >

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
      />

      {{-- Button   --}}
      <x-utils.inputs.button/>

    </x-utils.inputs.form>
    </x-utils.card>

</x-layouts.admin>

<script>
  $(document).ready(function (){
    $('#image').change(function(){
        $('#profile_image_placeholder').prop('src',window.URL.createObjectURL(this.files[0]));
        console.log(window.URL.createObjectURL(this.files[0]));
    })
  })
</script>