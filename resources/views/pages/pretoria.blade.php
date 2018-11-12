@extends('layouts.frontApp');

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: "Lato";
  background: url('https://subtlepatterns.com/patterns/sativa.png');
}

.main-gallery {
  background: #fff;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.25);
  border-top: solid 10px #7AA641;

}

.gallery-cell {
  width: 100%;
}

.testimonial {
  text-align: center;
  max-width: 400px;
  height: 400px;
  background-color: blue;
  margin: 100px auto 130px auto;
  padding: 0 20px;
}

.testimonial-avatar {
  width: 100px;
  border-radius: 50%;
}

.testimonial-quote {
  display: block;
  font-size: 24px;
  font-weight: 300;
  padding: 10px 0;
}

.testimonial-author {
  display: block;
  font-weight: 800;
  color: #7AA641;
}

.flickity-page-dots {
  bottom: 25px;
}

.flickity-page-dots .dot.is-selected {
  background: #7AA641;
}
ol li{
    list-style: none;
}

</style>
<body>
   <div class="main-gallery">
  <div class="gallery-cell">
    <div class="testimonial">
      
    </div>
  </div>
  <div class="gallery-cell">
    <div class="testimonial">
      <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/chexee/128.jpg">
      <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
      <span class="testimonial-author">Lisa Jones, Freelance Web Developer</span>
    </div>
  </div>
  <div class="gallery-cell">
    <div class="testimonial">
      <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/andretacuyan/128.jpg">
      <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
      <span class="testimonial-author">Ryan Waltz, Front-End Developer</span>
    </div>
  </div>
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.pkgd.min.js"></script>               

<script>
    var flkty = new Flickity( '.main-gallery', {
  cellAlign: 'left',
  contain: true,
  wrapAround: true,
  prevNextButtons: false,
  autoPlay: 2000
});
$("#featured-courses").flickity({
    wrapAround: true,
    pageDots:true
});

</script>
</body>
</html>