
<x-layouts.admin title="Artists">
  <x-utils.card title="Artist Edit Form">

    <div class="col-12">
      <div class="profile-container rounded-circle border border-cyan shadow shadow-2xl mx-auto mb-3 overflow-hidden">
        <img  
        src="{{$artist->profile_image ? $artist->profile_image_url : asset('assets/images/person-placeholder.png')}}" 
        id='profile_image_placeholder' 
        class="w-100" 
        >
      </div>
    </div>

    <x-utils.inputs.form  
    action="{{route('admin.artists.update',$artist->id)}}" 
    method="POST" 
    class="row g-3"
  >
    @method('PUT')


    {{-- Artist' Profile Image    --}}
    <x-utils.inputs.file  
      containerClass="col-md-6" 
      name="profile_image" 
      label="Profile Image"
    />

    {{-- Artist' Name    --}}
    <x-utils.inputs.input 
      containerClass="col-md-6" 
      name="name" 
      label="Name"    
      required="required"
      value="{{$artist->name}}"
    />

    {{-- Artist'Artist Type   --}}
    <x-utils.inputs.select  
      name="artist_type_id" 
      containerClass="col-md-6" 
      label="Artist's type"
      requiered="required"
    >
      @forelse ($artistTypes as $artistType )
        <option value="{{$artistType->id}}" @if($artistType->id == $artist->artist_type_id) selected @endif>
          {{$artistType->name}}
        </option>
        @empty
      @endforelse
    </x-utils.inputs.select>

    {{-- Regions   --}}
    <x-utils.inputs.select  
      name="region_id" 
      containerClass="col-md-6" 
      label="Region's name"
    > 
      @forelse ($regions as $region )
        <option value="{{$region->id}}" @if($region->id == $artist->region_id) selected @endif>
          {{$region->name}}
        </option>
        @empty
      @endforelse
    </x-utils.inputs.select>

    {{-- Social Url--}}
    <x-utils.inputs.text-area 
      name="social_url" 
      containerClass="col-12" 
      label="Social url"
      value="{{join(',',$artist->social_url)}}"
    />
    {{--Bio Graphy--}}
    <x-utils.inputs.text-area 
    name="bio" 
    containerClass=" col-12 col-md-12 ckeditor" 
    label="Bio Graphy"
    required="required"
    value="{{$artist->bio}}"
  />
    @foreach ($errors->all() as $error )
      {{$error}}
    @endforeach

    {{-- Button   --}}
    <x-utils.inputs.button name="update" icon="fa-wrench"/>

  </x-utils.inputs.form>
  </x-utils.card>
</x-layouts.admin>
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<script>
     CKEDITOR.replace( 'bio' );
</script>


<script>
  $(document).ready(function (){
    $('#profile_image').change(function(){
        $('#profile_image_placeholder').prop('src',window.URL.createObjectURL(this.files[0]));
        console.log(window.URL.createObjectURL(this.files[0]));
    })
  })
</script>