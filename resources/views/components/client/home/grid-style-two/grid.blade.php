@props([
  'blogs' => []
])

<section class="container py-5 border-top">
  <x-client.common.title.center-title title="Latest Blogs" />

  <div class="row">    
    <div class="col-lg-4 mb-3">
      @if(isset($blogs[0]))
        <x-client.home.grid-style-two.grid-item 
          image="{{$blogs[0]->cover_photo}}"
          title="{{$blogs[0]->title_mm}}"
          summary="{!!strip_tags($blogs[0]->description_mm)!!}"
          slug="{!!$blogs[0]->slug!!}"
        />
      @endif
    </div>
    <div class="col-lg-4 mb-3">
      @if(isset($blogs[1]))
        <x-client.home.grid-style-two.grid-item 
          image="{{$blogs[1]->cover_photo}}"
          title="{{$blogs[1]->title_mm}}"
          summary="{!!strip_tags($blogs[1]->description_mm)!!}"
          slug="{!!$blogs[1]->slug!!}"
        />
      @endif
    </div>
    <div class="col-lg-4 mb-3">
      @if(isset($blogs[2]))
        <x-client.home.grid-style-two.grid-item 
          image="{{$blogs[2]->cover_photo}}"
          title="{{$blogs[2]->title_mm}}"
          summary="{!!strip_tags($blogs[2]->description_mm)!!}"
          slug="{!!$blogs[2]->slug!!}"
        />
      @endif
    </div>
    <div class="col-lg-4">
      @if(isset($blogs[3]))
        <x-client.home.grid-style-two.grid-item 
          image="{{$blogs[3]->cover_photo}}"
          title="{{$blogs[3]->title_mm}}"
          summary="{!!strip_tags($blogs[3]->description_mm)!!}"
          slug="{!!$blogs[3]->slug!!}"
        />
      @endif
    </div>
    <div class="col-lg-4">
      @if(isset($blogs[4]))
        <x-client.home.grid-style-two.grid-item 
          image="{{$blogs[4]->cover_photo}}"
          title="{{$blogs[4]->title_mm}}"
          summary="{!!strip_tags($blogs[4]->description_mm)!!}"
          slug="{!!$blogs[4]->slug!!}"
        />
      @endif
    </div>
    <div class="col-lg-4">
      @if(isset($blogs[5]))
        <x-client.home.grid-style-two.grid-item 
          image="{{$blogs[5]->cover_photo}}"
          title="{{$blogs[5]->title_mm}}"
          summary="{!!strip_tags($blogs[5]->description_mm)!!}"
          slug="{!!$blogs[5]->slug!!}"
        />
      @endif
    </div>

  </div>
</section>