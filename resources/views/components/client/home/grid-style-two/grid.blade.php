@props([
  'title' => 'Latest News'
])

<section class="container py-5 border-top">
  <x-client.common.title.center-title :title="$title" />

  <div class="row">    
    <div class="col-lg-4">
      <x-client.home.grid-style-two.grid-item 
        image="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp"
        title="Test"
        summary="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae, officia."
        slug="test"
      />
    </div>
  </div>
</section>