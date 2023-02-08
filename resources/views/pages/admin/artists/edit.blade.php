
<x-layouts.admin title="Artists">
    <x-utils.inputs.form  
      action="{{route('admin.artists.update',$artist->id)}}" 
      method="POST" 
      class="row g-3"
    >
    @method('PUT')
      {{-- Artist' Name    --}}
      <x-utils.inputs.input 
        containerClass="col-md-6" 
        name="name" 
        label="Name"    
        required="required"
        value="{{$artist->name}}"
      />

      {{-- Artist' Profile Image    --}}
      <x-utils.inputs.file  
        containerClass="col-md-6" 
        name="profile_image" 
        label="Profile Image"
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
        containerClass="col-md-6" 
        label="Social url"
        value="{{join(',',$artist->social_url)}}"
      />
      
      @foreach ($errors->all() as $error )
        {{$error}}
      @endforeach

      {{-- Button   --}}
      <x-utils.inputs.button name="update" icon="fa-wrench"/>

    </x-utils.inputs.form>
</x-layouts.admin>