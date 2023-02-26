<x-layouts.admin title="Blog">
    <x-utils.card title="Create Blog">
        <div class="row p-0">   
            <div class=" col-12 col-md-3 d-none preview-cover-image-container">
                <h4 class="text-primary bold text-center">Cover photo</h4>
                <div class="cover-photo-preview ">
                    <img src="" class="w-100" id="cover-photo-preview">
                </div>
            </div>
            <div class=" col-12 col-md-9 d-none bold text-center preview-images-container">
                <h4 class="text-prima btn btn-outline-cyan">Other photo</h4>
                <div class="row p-0 justify-center other-images">
                    
                </div>
            </div>
        </div>
        <x-utils.inputs.form   
          action="" 
          method="post" 
          class="row g-3 justify-content-center"
        >

        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        {{-- Blog Corver Image--}}
        <x-utils.inputs.file  
        containerClass="col-12 col-md-6" 
        name="cover_photo" 
        label="Corver Photo"
        />

        {{-- Blog's Images    --}}
        <x-utils.inputs.file  
            containerClass=" col-12 col-md-6" 
            name="images[]"
            id="images" 
            label="Images"
            multiple="multiple"
        />

        {{-- Blog Category --}}
        <x-utils.inputs.select  
            name="blog_category_id" 
            containerClass=" col-12 col-md-12" 
            label="Blog Category"
            requiered="required"
        >
        @forelse ($blogCategories as $category )
            <option 
            value="{{$category->id}}" 
            {{old('blog_category_id') == $category->id?"selected":""}}
            >
            {{$category->name}}
            </option>
            @empty
        @endforelse
        </x-utils.inputs.select>

        {{-- Blog title    --}}
        <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="title_mm" 
            label="Title MM"
            required="required"
        />

        <x-utils.inputs.input 
            containerClass=" col-12 col-md-6" 
            name="title_en" 
            label="Title EN"
            required="required"
        />

        {{-- Description--}}
        <x-utils.inputs.text-area 
            name="description_mm" 
            containerClass=" col-12 col-md-6" 
            label="Description MM"
            required="required"
        />

        <x-utils.inputs.text-area 
            name="description_en" 
            containerClass=" col-12 col-md-6" 
            label="Description EN"
            required="required"
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