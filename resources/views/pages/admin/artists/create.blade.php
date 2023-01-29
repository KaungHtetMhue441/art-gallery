
<x-layouts.admin title="Artists">
    <x-utils.inputs.form  action="{{route('admin.artists.create')}}" 
                          method="post" 
                          class="row g-3"
                        >
      {{-- Artist' Name    --}}
      <x-utils.inputs.input containerClass="col-md-6" 
                            name="name" 
                            label="Name"
                            required="required"
                          />

      {{-- Artist' Profile Image    --}}
      <x-utils.inputs.file  containerClass="col-md-6" 
                            name="profile_image" 
                            label="Profile Image"
                          />

      {{-- Artist'Artist Type   --}}
      <x-utils.inputs.select  name="artist_type_id" 
                              containerClass="col-md-6" 
                              label="Artist's type"
                              requiered="required"
                            >
        @forelse ($artistTypes as $artistType )
          <option value="{{$artistType->id}}">
            {{$artistType->name}}
          </option>
          @empty
        @endforelse
      </x-utils.inputs.select>

      {{-- Regions   --}}
      <x-utils.inputs.select  name="region_id" 
                              containerClass="col-md-6" 
                              label="Region's name"
                               
                            > 
        @forelse ($regions as $region )
          <option value="{{$region->id}}">
            {{$region->name}}
          </option>
          @empty
        @endforelse
      </x-utils.inputs.select>

      {{-- Social Url--}}
      <x-utils.inputs.text-area name="social_url" 
                                containerClass="col-md-6" 
                                label="Social url"
                              />

      {{-- Button   --}}
      <x-utils.inputs.button/>

    </x-utils.inputs.form>
</x-layouts.admin>