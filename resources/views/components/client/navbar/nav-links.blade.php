@props([
  'links' => [
    [
      "name" => "Home",
      "href" => route('home')
    ],
    [
      "name" => "Shop",
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

<ul class="navbar-nav me-auto mb-2 mb-lg-0">
  @foreach ($links as $link)
    <li class="nav-item me-lg-5 fs-5">
      <a class="nav-link" href="{{ $link['href'] }}">{{ $link['name'] }}</a>
    </li>
  @endforeach
</ul>