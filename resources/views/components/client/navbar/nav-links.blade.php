@props([
  'links' => [
    [
      "name" => "Home",
      "href" => route('home')
    ],
    [
      "name" => "ArtWorks",
      "href" => route('artWorks.index')
    ],
    [
      "name" => "Artists",
      "href" => route('artists.index')
    ],
    [
      "name" => "Exhibitions",
      "href" => route('exhibitions.index')
    ],
    [
      "name" => "Blogs",
      "href" => route('blogs.index')
    ],
],'dropdowns' =>[
    [
      "name" => "About Us",
      "href" => route("about")
    ],
    [
      "name" => "Contact Us",
      "href" => route("contact")
    ],
]
])

<ul class="navbar-nav  me-auto mb-2 mb-lg-0" id="navbarSupportedContent">
  @foreach ($links as $link)
    <li class="nav-item me-lg-4 fs-5 @if(Str::contains(request()->route()->getName(),Str::lcfirst($link['name']))) nav-link-border-bottom @endif">
      <a class="nav-link font-weight-bolder text-shadow-middle @if(Str::contains(request()->route()->getName(),Str::lcfirst($link['name']))) active @endif" 
      href="{{ $link['href'] }}">{{ $link['name'] }}</a>
    </li>
  @endforeach
  <li class="dropdown me-lg-4 bg">
    <a class="dropdown-toggle text_primary fs-5 text-decoration-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <div class="fa fa-angle-down"></div>
    </a>
  
    <ul class="dropdown-menu bg_secondary" style="left: -120px!important;">
      @foreach ($dropdowns as $dropdown)
      <li><a class="dropdown-item text_primary fs-5" href="{{$dropdown['href']}}">{{$dropdown['name']}}</a></li>
        
      @endforeach
      {{-- <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
    </ul>
  </li>
</ul>