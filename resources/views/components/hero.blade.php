
  <div class="px-5 mt-10 hero-cont">
    <div class="row relative ">
      <div class="prev-hero">
        <i class="fa-solid fa-angle-left"></i>
      </div>
      <div class="next-hero">
        <i class="fa-solid fa-angle-right"></i>
      </div>
      <div class="overlay"></div>
        <div class="single-item slider-cont">
            <div class="hero-slide">
              <img src="https://image.tmdb.org/t/p/original{{$heroImages[0]->backdrop_path}}" class="d-block" alt="...">
            </div>
            <div class="hero-slide">
              <img src="https://image.tmdb.org/t/p/original{{$heroImages[1]->backdrop_path}}" class="d-block" alt="...">
            </div>
            <div class="hero-slide">
              <img src="https://image.tmdb.org/t/p/original{{$heroImages[2]->backdrop_path}}" class="d-block" alt="...">
            </div>
        </div>
        <div class="slick-slider-dots"></div>
    </div>
</div>