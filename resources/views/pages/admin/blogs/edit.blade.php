<x-layouts.admin title="Blog">
    <x-utils.card title="Create Blog">
        <div class="row p-0 mb-5">   
            <div class=" col-12 col-md-3 preview-cover-image-container">
                <h4 class=" btn btn-outline-cyan shadow-sm">Cover photo</h4>
                <div class="cover-photo-preview ">
                    <img src="{{asset('storage/blogs/'.$blog->cover_photo)}}" class="w-100" id="cover-photo-preview">
                </div>
            </div>
            <div class=" col-12 col-md-9 bold text-center preview-images-container">
                <h4 class="text-prima btn btn-outline-cyan">Other photo</h4>
                <div class="row p-0 justify-center other-images">
                    @if ($blog->images)
                        @forelse ($blog->images as $url)
                            <div class="col-5 col-md-3 ">
                                <div class="w-100 preview-image">
                                    <h3 class="text-center"> {{++$loop->index}}</h3>
                                    <img src="{{asset('storage/blogs'.$url->name)}}" class="w-100">
                                </div>
                                <h6 class="font-weight-bolder text-active fs-2">{{$url->original_name}}</h6>
                            </div>
                            @empty
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
        <x-utils.inputs.form   
          action="{{route('admin.blog.update',$blog->id)}}" 
          method="post" 
          class="row g-3 justify-content-center"
        >
        @method('PUT')

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
            @if($category->id == $blog->blog_category_id) selected @endif>
            {{old('blog_category_id') == $category->id?"selected":""}}
            {{$category->name}}
            </option>
            @empty
        @endforelse
        </x-utils.inputs.select>

        {{-- Blog title    --}}
        <x-utils.inputs.input 
            containerClass=" col-12 col-md-12" 
            name="title_mm" 
            label="Title MM"
            required="required"
            value="{{$blog->title_mm}}"
        />

        <x-utils.inputs.input 
            containerClass=" col-12 col-md-12" 
            name="title_en" 
            label="Title EN"
            required="required"
            value="{{$blog->title_en}}"
        />

        {{-- Description--}}
        <x-utils.inputs.text-area 
            name="description_mm" 
            containerClass=" col-12 col-md-12" 
            label="Description MM"
            required="required"
            value="{!!$blog->description_mm!!}"
        />

        <x-utils.inputs.text-area 
            name="description_en" 
            containerClass=" col-12 col-md-12" 
            label="Description EN"
            required="required"
            value="{!!$blog->description_en!!}"
        />
        
        {{-- Button   --}}
        <x-utils.inputs.button name="update" icon="fa-wrench"/>

        </x-utils.inputs.form>
    </x-utils.card>
</x-layouts.admin>
<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace( 'description_mm' );
    CKEDITOR.replace( 'description_en' );
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