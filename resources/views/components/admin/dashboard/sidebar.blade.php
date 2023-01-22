@props([
    'links' => [
        [
            'name' => "Dashboard",
            'uri' => '/admin',
            'icon' => 'bi bi-people-fill'
        ]
    ]
])

<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @foreach ($links as $link)
                    <li class="sidebar-item"> 
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ $link['uri'] }}" aria-expanded="false">
                            <i class="fa-solid fa-check"></i>                            
                            <span class="hide-menu">{{ $link['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>