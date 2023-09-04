
<x-layouts.admin title="Artwork">
    <x-utils.card title="Create ArtWork">
        <div class="row p-0">   
            <div class=" col-12 col-md-3 d-none preview-cover-image-container">
                <h4 class=" btn btn-outline-cyan shadow-sm">Cover photo</h4>
                <div class="cover-photo-preview ">
                    <img src="" class="w-100 border shadow-sm" id="cover-photo-preview">
                </div>
            </div>
            <div class=" col-12 col-md-9 d-none bold text-center preview-images-container">
                <h4 class=" btn btn-outline-cyan shadow-sm">Other photo</h4>
                <div class="row p-0 justify-center other-images">
                    
                </div>
            </div>
        </div>
        <x-utils.inputs.form   
        action="{{route('admin.artwork.store')}}" 
        method="post" 
        class="row g-3 justify-content-center"
        >
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
            required="required"
            >
            @forelse ($artists as $artist )
                <option 
                value="{{$artist->id}}"
                {{old('artist_id') == $artist->id?"selected":""}}
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
             required="required"
             >
             @forelse ($artWorkCategories as $category )
                 <option 
                 value="{{$category->id}}" 
                 {{old('art_work_category_id') == $category->id?"selected":""}}
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
            required="required"
            />
            {{-- Size    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="size" 
            label="Size"
            required="required"
            />
            {{-- Medium    --}}
            <x-utils.inputs.select  
             name="art_work_medium_id" 
             containerClass=" col-12 col-md-4" 
             label="Artwork Medium"
             required="required"
             >
             @forelse ($artWorkMediums as $medium)
                 <option 
                 value="{{$medium->id}}" 
                 {{old('art_work_medium_id') == $medium->id ? "selected" : ""}}
                 >
                 {{$medium->name}}
                 </option>
                 @empty
             @endforelse
             </x-utils.inputs.select>
            {{-- Material    --}}
            <x-utils.inputs.select  
             name="art_work_material_id" 
             containerClass=" col-12 col-md-4" 
             label="Artwork Material"
             required="required"
             >
             @forelse ($artWorkMaterials as $material)
                 <option 
                 value="{{$material->id}}" 
                 {{old('art_work_material_id') == $material->id ?"selected" : ""}}
                 >
                 {{$material->name}}
                 </option>
                 @empty
             @endforelse
             </x-utils.inputs.select>
            {{-- Price    --}}
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="price" 
            label="Price"
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
                {{old('currency') == 'mmk'?"selected":""}}
                >
                    MMK
                </option>

                <option 
                value="usd" 
                {{old('currency') == 'usd'?"selected":""}}
                >
                    USD
                </option>
            </x-utils.inputs.select>
            {{-- ArtWork created year    --}}   
            <x-utils.inputs.input 
            containerClass=" col-12 col-md-4" 
            name="year" 
            label="year"
            required="required"
            />
            {{-- Description--}}
            <x-utils.inputs.text-area 
            name="description" 
            containerClass=" col-12 ckeditor" 
            label="Description"
            />

        {{-- Button   --}}
        <x-utils.inputs.button btnClass="float-end"/>
  
      </x-utils.inputs.form>
    </x-utils.card>
</x-layouts.admin>
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<script>
     CKEDITOR.replace( 'description' );
</script>
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
                <img src="${window.URL.createObjectURL(file)}" class="w-100  shadow-sm">
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