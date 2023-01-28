@props([
    'links' => [
        [
            'name' => "Dashboard",
            'uri' => route('admin.index'),
            'icon' => 'fa fa-house'
        ],
        [
            'name'=>"Artists",
            'uri'=>route('admin.articles.index'),
            'icon' =>'fa fa-users'
        ],
        [
            'name'=>"ArtWorks",
            'uri'=>route('admin.artwork.index'),
            'icon'=>'fa palette'
        ],
        [
          'name'=>"Exhibitions",
          'uri'=>route('admin.exhibition.index'),
          'icon'=>'fa-solid fa-bullhorn'  
        ]    
    ]
])

<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach ($links as $link)
                    <li class="sidebar-item"> 
                        <a class="sidebar-link waves-effect waves-dark sidebar-link w-full" href="{{ $link['uri'] }}" aria-expanded="false">
                            <i class="{{$link['icon']}}"></i>
                            <x-utils.space spaceX='px-1'></x-utils.space>
                            <span class="hide-menu">{{ $link['name'] }}</span>
                            @if(request()->url() === $link['uri'])
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