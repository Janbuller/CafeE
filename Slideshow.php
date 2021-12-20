<style>
body { font-family: sans-serif; }

.carousel {
  background: #EEE;
}

.carousel-cell {
  margin-right: 20px;
  overflow: hidden;
}

.carousel-cell img {
  display: block;
  height: 400px;
}
}
</style>

<!-- Actual content -->
<div class="main-carousel">

  <div class="carousel-cell">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="carousel-cell">
    <img src="img/Mad1.jpeg">
  </div>

  <div class="carousel-cell">
    <img src="img/Mad2.jpeg">
  </div>

    <div class="carousel-cell">
    <img src="img/Mad3.jpeg">
  </div>

    <div class="carousel-cell">
    <img src="img/Mad4.jpeg">
  </div>

</div>

<script>
var carousel = document.querySelector('.main-carousel');
var flkty = new Flickity( carousel, {
  imagesLoaded: true,
  percentPosition: false,
  autoPlay: 3000,
  wrapAround: true,
});

var imgs = carousel.querySelectorAll('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
  'transform' : 'WebkitTransform';

</script>