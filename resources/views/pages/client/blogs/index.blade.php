<x-layouts.app>
    <x-slot name="header">
        <title>Blogs</title>
    </x-slot>

    <div class="container-fluid px-100">
        <x-client.common.title.left-title title="Blogs" />
        
        <div class="row justify-content-center">    
            @foreach ($blogs as $blog)
            <div class="col-lg-3 mb-3">
              <x-client.home.grid-style-two.grid-item 
                :image="$blog->cover_photo"
                :title="$blog->title_en"
                :summary="$blog->description_en"
                :slug="$blog->slug"
              />
            </div>
            @endforeach
        </div>  

        <nav class="mt-2">
            <div class="d-inline-block float-end">
              {{$blogs->links()}}
            </div>
        </nav>
    </div>
</x-layouts.app>