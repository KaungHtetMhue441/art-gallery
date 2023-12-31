@props([
    'links' => [
        [
            'name' => "Dashboard",
            'uri' => route('admin.index'),
            'icon' => 'fa fa-house'
        ],
        [
            'name'=>"Artists",
            'uri'=>route('admin.artists.index'),
            'icon' =>'fa fa-users'
        ],
        [
            'name'=>"ArtWorks",
            'uri'=>route('admin.artwork.index'),
            'icon'=>'fa fa-palette'
        ],
        [
          'name'=>"Exhibitions",
          'uri'=>route('admin.exhibitions.index'),
          'icon'=>'fa-solid fa-bullhorn'  
        ],
        [
            'name'=>"Blogs",
            'uri'=>route('admin.blog.index'),
            'icon'=>'fa-solid fa-paintbrush'
        ],    
        [
            'name'=>"Slider",
            'uri'=>route('admin.image-slider.index'),
            'icon'=>'fa-solid fa-image'
        ],    
        [
            'name'=>"Artist Types",
            'uri'=>route('admin.artist-types.index'),
            'icon'=>'fa-solid fa-image'
        ],    
        [
            'name'=>"Artwork Categories",
            'uri'=>route('admin.artwork-categories.index'),
            'icon'=>'fa-solid fa-image'
        ],    
        [
            'name'=>"Artwork Mediums",
            'uri'=>route('admin.artwork-mediums.index'),
            'icon'=>'fa-solid fa-image'
        ],    
        [
            'name'=>"Artwork Materials",
            'uri'=>route('admin.artwork-materials.index'),
            'icon'=>'fa-solid fa-image'
        ],    
    ]
])

<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach ($links as $link)
                    <li class="sidebar-item mb-3 @if(str_contains(request()->url(),strtolower($link['name']))) selected @endif"> 
                        <a class="sidebar-link waves-effect waves-dark sidebar-link w-full" href="{{ $link['uri'] }}" aria-expanded="false">
                            <i class="{{$link['icon']}}"></i>
                            <x-utils.space spaceX='px-1'></x-utils.space>
                            <span class="hide-menu">{{ $link['name'] }}</span>
                            @if(str_contains(request()->url(),strtolower($link['name'])))
                                <x-utils.space spaceX='px-2'></x-utils.space>
                                <i class="fa-solid fa-check"></i>  
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>