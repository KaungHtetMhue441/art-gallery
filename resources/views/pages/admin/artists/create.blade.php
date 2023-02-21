
<x-layouts.admin title="Artists">
      {{-- @foreach ($errors->all() as $error)
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Hey!</strong> {{$error}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
    @endforeach --}}

    <x-utils.errors errors="{{join(',',$errors->all())}}"></x-utils.errors>
    <x-utils.card title="Artist Create Form">
      <div class="col-12">
        <div class="profile-container rounded-circle border border-cyan shadow shadow-2xl mx-auto mb-3 overflow-hidden">
          <img  src="{{asset('assets/images/person-placeholder.png')}}" id='profile_image_placeholder' class="w-100" alt="">
        </div>
      </div>

      <x-utils.inputs.form  
      action="{{route('admin.artists.store')}}" 
      method="post" 
      class="row g-3"
    >

      {{-- Artist' Profile Image    --}}
      <x-utils.inputs.file  
        containerClass=" col-12 col-md-6" 
        name="profile_image" 
        label="Profile Image"
      />
      {{-- Artist' Name    --}}
      <x-utils.inputs.input 
        containerClass=" col-12 col-md-6" 
        name="name" 
        label="Name"
        required="required"
      />

      {{-- Artist'Artist Type   --}}
      <x-utils.inputs.select  
        name="artist_type_id" 
        containerClass=" col-12 col-md-6" 
        label="Artist's type"
        requiered="required"
      >
        @forelse ($artistTypes as $artistType )
          <option value="{{$artistType->id}}" {{old('artist_type_id')==$artistType->id?"selected":""}}>
            {{$artistType->name}}
          </option>
          @empty
        @endforelse
      </x-utils.inputs.select>

      {{-- Regions   --}}
      <x-utils.inputs.select  
        name="region_id" 
        containerClass=" col-12 col-md-6" 
        label="Region's name"
      > 
        @forelse ($regions as $region )
          <option value="{{$region->id}}" {{old('region_id') == $region->id?"selected":""}}>
            {{$region->name}}
          </option>
          @empty
        @endforelse
      </x-utils.inputs.select>

      {{-- Social Url--}}
      <x-utils.inputs.text-area 
        name="social_url" 
        containerClass=" col-12 col-md-6" 
        label="Social url"
      />

      {{-- Button   --}}
      <x-utils.inputs.button/>

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