@extends('template.master')
@section('content')

<section class="section">
			<div class="container">
        <!-- Start Carousel -->
        <style>
          #carousel-demo {
            overflow: hidden;
          }
          #carousel-demo img {
            height: 400px;
            width: 100%;
          }
          #carousel-demo2 {
            overflow: hidden;
          }
          #carousel-demo2 img {
            height: 300px;
          }
        </style>
				<div id="carousel-demo" class="carousel">
					<div class="item-1">
            <!-- Slide Content -->
            <img src="{{asset('/img/slider-1.jpg')}}" alt="">
					</div>
					<div class="item-2">
            <!-- Slide Content -->
            <img src="{{asset('/img/slider-2.jpg')}}" alt="">
					</div>
					<div class="item-3">
            <!-- Slide Content -->
            <img src="{{asset('/img/slider-3.jpg')}}" alt="">
          </div>
          <div class="item-4">
            <!-- Slide Content -->
            <img src="{{asset('/img/slider-4.jpg')}}" alt="">
          </div>
				</div>
				<!-- End Carousel -->
			</div>
</section>

<section>
  <h3 class="title is-4">New Movies</h3>
  <div id="carousel-demo2" class="carousel">
		<div class="item-1">
      <img src="{{asset('/img/slider-1.jpg')}}" alt="">
		</div>
		<div class="item-2">
      <img src="{{asset('/img/slider-2.jpg')}}" alt="">
		</div>
		<div class="item-3">
      <img src="{{asset('/img/slider-3.jpg')}}" alt="">
    </div>
    <div class="item-4">
      <img src="{{asset('/img/slider-4.jpg')}}" alt="">
    </div>
	</div>
</section>

<script src="{{asset('/js/bulma-carousel.min.js')}}"></script>
<script>
		bulmaCarousel.attach('#carousel-demo', {
			slidesToScroll: 1,
			slidesToShow: 1,
      autoplay: true,
      loop: true
		});
    bulmaCarousel.attach('#carousel-demo2', {
			slidesToScroll: 1,
			slidesToShow: 4,
		});
</script>
@endsection
