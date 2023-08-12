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
  ]
])

<ul class="navbar-nav  me-auto mb-2 mb-lg-0" id="navbarSupportedContent">
  @foreach ($links as $link)
    <li class="nav-item me-lg-5 fs-5">
      <a class="nav-link font-weight-bolder" href="{{ $link['href'] }}">{{ $link['name'] }}</a>
    </li>
  @endforeach
</ul>