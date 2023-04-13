
<x-layouts.admin title="Artwork">
    <x-utils.card title="Create ArtWork">
        <div class="row p-0 mb-5">   
            <div class=" col-12 col-md-3 preview-cover-image-container">
                <h4 class=" btn btn-outline-cyan shadow-sm">Cover photo</h4>
                <div class="cover-photo-preview ">
                    <img src="{{$artWork->cover_photo_url}}" class="w-100" id="cover-photo-preview">
                </div>
            </div>
            <div class=" col-12 col-md-9 bold text-center preview-images-container">
                <h4 class="text-prima btn btn-outline-cyan">Other photo</h4>
                <div class="row p-0 justify-center other-images">
                    @forelse ($artWork->imageswith_url as $url)
                        <div class="col-5 col-md-3 ">
                            <div class="w-100 preview-image">
                                <h3 class="text-center"> {{++$loop->index}}</h3>
                                <img src="{{$url->name}}" class="w-100">
                            </div>
                            <h6 class="font-weight-bolder text-active fs-2">{{$url->original_name}}</h6>
                        </div>
                        @empty
                    @endforelse
                </div>
            </div>
        </div>
        <x-utils.inputs.form   
        action="{{route('admin.artwork.update',$artWork->id)}}" 
        method="post" 
        class="row g-3 justify-content-center"
        >
        @method('PUT')
            {{-- ArtWork Corver Image    --}}
            <x-utils.inputs.file  
            containerClass="col-12 col-md-6" 
            name="cover_photo" 
            label="Corver Photo"
            />
            {{-- ArtWork's Images    --}}
            <x-utils.inputs.file  
                containerClass=" col-12 col-md-6" 
                name="images[]"
                id="images" 
                label="Images"
                multiple="multiple"
            />
            {{-- Artist   --}}
            <x-utils.inputs.select  
            name="artist_id" 
            containerClass=" col-12 col-md-4" 
            label="Artist"
            requiered="required"
            >
            @forelse ($artists as $artist )
                <option 
                value="{{$artist->id}}"
                {{$artWork->artist_id == $artist->id?"selected":""}}
                >
                {{$artist->name}}
                </option>
                @empty
            @endforelse
            </x-utils.inputs.select>
             {{-- Artist   --}}
             <x-utils.inputs.select  
             name="art_work_category_id" 
             containerClass=" col-12 col-md-4" 
             label="Artwork Category"
             requiered="required"
             >
             @forelse ($artWorkCategories as $category )
                 <option 
                 value="{{$category->id}}" 
                 {{$artWork->artwork_category_id == $category->id?"selected":""}}
                 >
                 {{$category->name}}
                 </option>
                 @empty
             @endforelse
             </x-utils.inputs.select>
            {{-- Artwork title    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="title" 
            label="Title"
            value="{{$artWork->title}}"
            required="required"
            />
            {{-- Size    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="size" 
            label="Size"
            value="{{$artWork->size}}"
            required="required"
            />
            {{-- Medium    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="medium" 
            label="Medium"
            value="{{$artWork->medium}}"
            required="required"
            />
            {{-- Material    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="material" 
            label="Material"
            value="{{$artWork->material}}"
            required="required"
            />
            {{-- Price    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="price" 
            label="Price"
            value="{{$artWork->price}}"
            required="required"
            />
            {{-- Currency    --}}
            <x-utils.inputs.select  
             name="currency" 
             containerClass="col-12 col-md-4" 
             label="Currency"
             required="required"
             >
                <option 
                value="mmk" 
                {{$artWork->currency == 'mmk' ? "selected" : ""}}
                >
                    MMK
                </option>

                <option 
                value="usd" 
                {{$artWork->currency == 'usd' ? "selected" : ""}}
                >
                    USD
                </option>
            </x-utils.inputs.select>

            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="currency" 
            label="Currency"
            value="{{$artWork->currency}}"
            required="required"
            />
            {{-- ArtWork created year    --}}   
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="year" 
            label="year"
            value="{{$artWork->year}}"
            required="required"
            />
            {{-- Description--}}
            <x-utils.inputs.text-area 
            name="description" 
            containerClass=" col-12 " 
            value="{{$artWork->description}}"
            label="Description"
            />

        {{-- Button   --}}
        <x-utils.inputs.button btnClass="float-end"/>
  
      </x-utils.inputs.form>
    </x-utils.card>
</x-layouts.admin>

<script>
    $(document).ready(function ()
    {
      $('#cover_photo').change(function()
      {
        $('.preview-cover-image-container').removeClass('d-none');


        $('#cover-photo-preview').prop('src',window.URL.createObjectURL(this.files[0]));
      })

      $('#images').change(function()
      {
        $('.preview-images-container').removeClass('d-none');

        $('.other-images').html("");
        let otherContent = "<input type='number' class='d-none' count value='0'>";
        Object.values(this.files).sort((first,second)=>{

            if (first.name< second.name) {
                return -1;
            }       

            if (first.name > second.name) {
                return 1;
            }
        
        }).forEach(function(file,index){
           otherContent+= `
            <div class="col-5 col-md-3  preview-image">
                <h3 class="text-center"> ${index+1}</h3>
                <img src="${window.URL.createObjectURL(file)}" class="w-100">
                <div class="form-check-container">
                    <span class="form-check-label font-weight-bolder text-primary fs-2">${file.name}</span>
                </div>  
            </div>
        ` ;
        });
        $('.other-images').append(otherContent);
       
      })
      
    })
</script>