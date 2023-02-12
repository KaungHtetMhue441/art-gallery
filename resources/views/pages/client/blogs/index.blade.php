<x-layouts.app>
    <x-slot name="header">
        <title>Blogs</title>
    </x-slot>

    <div class="container">
        <x-client.common.title.left-title title="Blogs" />
        
        <div class="row">    
            @foreach ($blogs as $blog)
            <div class="col-lg-4 mb-3">
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
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </nav>
    </div>
</x-layouts.app>