@props([
  'images' => []
])

<section class="video__section rounded mb-3" id="video__section">
<!-- Slider main container -->
<div class="swiper pt-lg-2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper shadow-lg" id="swiper-wrapper">
      <!-- Slides -->
      @foreach ($images as $image)
       <div class="swiper-slide">
        <center>
          <img class="carousel_image" src="{{ $image->image_url }}" alt="{{ $image->name }}">
        </center>
       </div>
      @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    {{-- <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> --}}
  
    <!-- If we need scrollbar -->
    {{-- <div class="swiper-scrollbar"></div> --}}
  </div>
</section>