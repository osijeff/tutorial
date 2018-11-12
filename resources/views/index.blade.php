@extends('layouts.frontApp')
@section('content')
<div class="container-slide">
  {{-- <div class="h1">Image Slider With jQuery</div> --}}
  <div class="slide one" id="slideOne">
    <div class="text-area">
      <h3 class="headline"><i class="fas fa-home"></i>Fresh Vegetables</h3>
      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
    </div>
  </div>
  <div class="slide two" id="slideTwo">
    <div class="text-area">
      <h3 class="headline">Fresh Water</h3>
      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
    </div>
  </div>
  <div class="slide three" id="slideThree">
    <div class="text-area">
      <h3 class="headline">Fresh Cut Grass</h3>
      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
    </div>
  </div>
  <div class="slide four" id="slideFour">
    <div class="text-area">
      <h3 class="headline">Fresh Air</h3>
      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
    </div>
  </div>
  <div class="slide five" id="slideFive">
    <div class="text-area">
      <h3 class="headline">Fresh Prince Bel Air</h3>
      <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
    </div>
  </div>
</div>

                <section class="aboutsection">
                  <div class="about-title">
                    <h2 class="aboutus" style="padding-top:2em">OUR CHURCH</h2>
                    <img class="ruler" src="images/Shape2.png" alt="" width="200px" height="300px">
                    <P class="caption">Find Out More About Our  Church And Who We are</P>

                  </div>
                  <div class="wraper">
                    <div class="item"> <img  class="apostl"src="images/logo.jpg" alt="" width="200px" height="200px">
                      <h3 class="has-text-centered">OUR CHURCH</h3>
                      <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px">
                      <p class="has-text-center has-text-white" >Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit,    </p>

                      <a  href="" class="button is-success">Lear More</a>
                        </div>
                    <div class="item">
                      <img  class="apostle"src="images/apostle.jpg" alt="" width="300px" height="300px">
                      <h3 class="has-text-centered">LEADERSHIP</h3>
                      <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px">
                      <p class="has-text-center has-text-white" >Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit, </p>
                        <a  href="" class="button is-primary">Lear More</a>
                    </div>

                    <div class="item">


                        <img  class="apostle"src="images/church.png" alt="" width="300px" height="300px">
                        <h3 class="has-text-centered">LEADERSHIP</h3>
                        <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px">
                        <p class="has-text-center has-text-white" >Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit,   </p>
                          <a  href="" class="button is-primary">Lear More</a>
                    </div>
                  </div>
                  {{-- end of aboutsection --}}
                </section>
                <section class="richesofgrace" >
                  <div class="sundaytitle">
                    <h2>riches of grace</h2>
                    <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px">
                    <p>Have not I commanded thee? Be strong and of a good courage; be <br> not afraid, neither be thou dismayed: for <br> the LORD thy God is with thee whithersoever thou goest. Joshua 1:9</p>
                  </div>
                  <div class="sundaycaption">
                    <h4>the ultimate</h4>
                    <p>This is my command—be strong  and courageous! Do not <br> be afraid or discouraged. For the LORD your God  is with you wherever you go.” <br> <span style="margin-top:2em"><a  href="" class="button is-primary">Lear More</a></span> </p>
                  </div>
                </section>

                  <div class="eventitle">
                    <h1>Upcoming Events</h1>
                    <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px">
                    <p>Be sure to visit our Upcoming Events page regularly to get infomartion</p>
                  </div>
                  <section class="upcomingevent" >
                  <div class="columns">
                    <div class="column">
                      <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                          <div class="date">
                            <div class="day">13-20</div>
                            <div class="month">Mar</div>
                          </div>
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                          <div class="category">Revival Night</div>
                          <h1 class="title">City Lights in New York</h1>
                          <h2 class="sub_title">The city that never sleeps.</h2>
                          <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                          <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                          <div class="date">
                            <div class="day">13-20</div>
                            <div class="month">Mar</div>
                          </div>
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                          <div class="category">Revival Night</div>
                          <h1 class="title">City Lights in New York</h1>
                          <h2 class="sub_title">The city that never sleeps.</h2>
                          <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                          <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                          <div class="date">
                            <div class="day">13-20</div>
                            <div class="month">Mar</div>
                          </div>
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                          <div class="category">Revival Night</div>
                          <h1 class="title">City Lights in New York</h1>
                          <h2 class="sub_title">The city that never sleeps.</h2>
                          <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                          <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</a></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="column">
                      <div class="post-module">
                        <!-- Thumbnail-->
                        <div class="thumbnail">
                          <div class="date">
                            <div class="day">13-20</div>
                            <div class="month">Mar</div>
                          </div>
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                        </div>
                        <!-- Post Content-->
                        <div class="post-content">
                          <div class="category">Revival Night</div>
                          <h1 class="title">City Lights in New York</h1>
                          <h2 class="sub_title">The city that never sleeps.</h2>
                          <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
                          <div class="post-meta"><span class="timestamp"><i class="fas fa-podium"></i><i class="fas fa-volume-up"></i><i> Ministering:</i>  </span><span class="comments"><br><i class="fas fa-user-circle"></i>
                            Apostle G.O Akintola</a></span></div>
                          <div class="post-meta"><span class="timestamp"> <a href=""> <i>Lear More <i class="fas fa-arrow-right"></i></i></a></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

                  <section class="sermon  ">
                    <div class="lastest-heading">
                        <h3>Watch and Listen</h3>
                      <h2>Our Lastest Sermons</h2>
                      <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px">
                    </div>

                     <div class="each-sermon" >
                      <div class="columns wraper-flex">
                        <div class="column single" style="max-width: 100%;" >
                          <h1 class="s-date" ><i class="fas fa-calendar-alt"></i> <span> 12 <br> MAY</span> </h1>
                          <br><br>
                          <h4><i class="fas fa-envelope"></i> <b>Purpose Driven youth</b> </h4>

                            <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px"> <br>
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          <hr>
                          <div class="icon-in-sermon">
                            <a href=""> <i class="fas fa-microphone"></i></a>
                            <a href=""><i class="fas fa-share-alt"></i></a>
                            <a href=""><i class="fas fa-cloud-download-alt"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="far fa-file-alt"></i></a>
                          </div>
                          <img class="ruler has-text-centered" src="images/apostle.jpg" alt="" width="50px" height="50px" style="  border-radius: 50%;" >
                           <span> Apostle G.O.Akintola</span>
                        </div>
                        <div class="column single">
                            <h1 class="s-date" ><i class="fas fa-calendar-alt"></i> <span> 12 <br> MAY</span> </h1>
                          <br><br>
                          <h4><i class="fas fa-envelope"></i> <b>Purpose Driven youth</b> </h4>

                            <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px"> <br>
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          <hr>
                          <div class="icon-in-sermon">
                            <a href=""> <i class="fas fa-microphone"></i></a>
                            <a href=""><i class="fas fa-share-alt"></i></a>
                            <a href=""><i class="fas fa-cloud-download-alt"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="far fa-file-alt"></i></a>
                          </div>
                          <img class="ruler has-text-centered" src="images/apostle.jpg" alt="" width="50px" height="50px" style="  border-radius: 50%;" >
                           <span> Apostle G.O.Akintola</span>
                        </div>
                        <div class="column single">
                            <h1 class="s-date" ><i class="fas fa-calendar-alt"></i> <span> 12 <br> MAY</span> </h1>
                          <br><br>
                          <h4><i class="fas fa-envelope"></i> <b>Purpose Driven youth</b> </h4>

                            <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px"> <br>
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          <hr>
                          <div class="icon-in-sermon">
                            <a href=""> <i class="fas fa-microphone"></i></a>
                            <a href=""><i class="fas fa-share-alt"></i></a>
                            <a href=""><i class="fas fa-cloud-download-alt"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="far fa-file-alt"></i></a>
                          </div>
                          <img class="ruler has-text-centered" src="images/apostle.jpg" alt="" width="50px" height="50px" style="  border-radius: 50%;" >
                           <span> Apostle G.O.Akintola</span>
                        </div>
                        <div class="column single">
                            <h1 class="s-date" ><i class="fas fa-calendar-alt"></i> <span> 12 <br> MAY</span> </h1>
                          <br><br>
                          <h4><i class="fas fa-envelope"></i> <b>Purpose Driven youth</b> </h4>

                            <img class="ruler has-text-centered" src="images/Shape2.png" alt="" width="200px" height="300px"> <br>
                            What is Lorem Ipsum?
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          <hr>
                          <div class="icon-in-sermon">
                            <a href=""> <i class="fas fa-microphone"></i></a>
                            <a href=""><i class="fas fa-share-alt"></i></a>
                            <a href=""><i class="fas fa-cloud-download-alt"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="far fa-file-alt"></i></a>
                          </div>
                          <img class="ruler has-text-centered" src="images/apostle.jpg" alt="" width="50px" height="50px" style="  border-radius: 50%;" >
                           <span> Apostle G.O.Akintola</span>
                        </div>
                      </div>
                     </div>
                </section>
                {{-- testimonial Section --}}


                <section class="testimony-wrapper">
                  div class="main-gallery">
                  <div class="gallery-cell">
                    <div class="testimonial">
                      <img class="testimonial-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                      <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                      <span class="testimonial-author">Joe Smith, CEO of Cubix</span>
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

                </section>






                news letter section
                <section class="news-letter section">
                        <h1 class="is-size-1">Subscribe</h1>
                        <img class="ruler" src="images/Shape2.png" alt="" width="200px" height="300px">
                        <h2 class="subtitle">
                           <i>Subscribe to our newsletter for regular updates</i>
                          </h2>
                        <div class="container subscribe">
                          <form class="form-inline" action="/action_page.php">
                            <label for="First-name"></label>
                            <input type="text" id="First-name" placeholder="Last Name" name="fname">
                            <label for="Last-name"></label>
                            <input type="text" id="Last-name" placeholder="Last Name" name="lname">

                            <label for="email"></label>
                            <input type="email" id="email" placeholder="Email" name="email">

                            <button type="submit">SUBSCRIBE</button>
                          </form>
                        </div>
                </section>
                {{-- footer section --}}
                 <footer class="footer-wrapper">
                    <div class="content-rapper">
                        <div class="columns is-mobile" style="margin-top:4em;">
                          <div class="column footer-column">
                            <img  class="apostl"src="images/logo.jpg" alt="" width="50px" height="50px"> <h3>The Apostolic  Church LAWNA<br> South Africa
                            </h3>
                            <address style="margin-top:2em">
                              110 High Street
                              Cnr Kennedy
                              Turffontein
                              Johannesburg
                              South Africa <br>
                              Tel:0740314292 <br>
                              Emai: aimua_jeff@yahoo.com
                            </address>
                          </div>
                          <div class="column footer-column ">
                            <h3 class="has-text-centered" >Quick Links</h3>
                            <div class="linkwraper">
                              <div class="link-item">
                                <a href=""><i class="fas fa-link"></i> Home</a> <br>
                              <a href=""><i class="fas fa-link"></i> Sermons</a> <br>
                              <a href=""><i class="fas fa-link"></i> About Us</a> <br>
                              <a href=""><i class="fas fa-link"></i> Donate</a>
                              </div>
                            <div class="link-item">
                                  <a href=""><i class="fa fa-link"></i> Home</a> <br>
                                <a href=""><i class="fas fa-link"></i> Sermons</a> <br>
                                <a href=""><i class="fas fa-link"></i> About Us</a> <br>
                                <a href=""><i class="fas fa-link"></i> Donate</a>
                            </div>
                            </div>
                          </div>
                          <div class="column footer-column-3">
                          <h3>  Gallery</h3>
                          <div class="gallerywraper">
                            <div class="gallery-item">
                                <img  class="gallery-image"src="images/slid-3.jpg" alt="" width="100px" height="100px">
                                <img  class="gallery-image"src="images/slid-4.jpg" alt="" width="100px" height="100px">
                                <img  class="gallery-image"src="images/slid-2.jpg" alt="" width="100px" height="100px">
                            </div>
                            second set of item
                            <div class="gallery-item">
                                <img  class="gallery-image"src="images/slid-1.jpg" alt="" width="100px" height="100px">
                                <img  class="gallery-image"src="images/slid-6.jpg" alt="" width="100px" height="100px">
                                <img  class="gallery-image"src="images/slid-4.jpg" alt="" width="100px" height="100px">
                            </div>
                          </div>
                          <a href=""><i class="fas fa-arrow-right"></i> <i> View More</i></a>
                          </div>
                          <div class="column footer-column-4">
                          <h3>Recent Post</h3>

                                <p><img  class="recent-post-image"src="images/slid-1.jpg" alt="" width="100px" height="120px"><span class="recent-title" >The Spiritual Growth</span></p>
                                <p><img  class="recent-post-image"src="images/slid-6.jpg" alt="" width="100px" height="120px">
                                 <span class="recent-title"> The Spiritual Growth</span> <p> <img  class="recent-post-image"src="images/slid-4.jpg" alt="" width="100px" height="120px"> <span class="recent-title">The Spiritual Growth</span></p>

                          </div>
                        </div>
                    </div>
                  </div>

                </footer>  --}}


@endsection






                {{-- <div class="upcoming">
                  <div class="box-set"></div>
                  <ul>
                      <li>
                          <div class="box-set">
                            <a href="">worship with us</a>
                          </div>
                          <a href="">
                            <img src="images/slid-1.jpg" alt="">
                          </a>
                        </li>
                    <li>
                        <div class="box-set">
                            <a href="">worship with us</a>
                          </div>
                      <a href="">
                        <img src="images/slid-2.jpg" alt="">
                      </a>
                    </li>
                    <li>
                        <div class="box-set">
                            <a href="">worship with us</a>
                          </div>
                        <a href="">
                          <img src="images/slid-3.jpg" alt="">
                        </a>
                      </li>
                      <li><div class="box-set">
                          <a href="">worship with us</a>
                        </div>
                          <a href="">
                            <img src="images/slid-4.jpg" alt="">
                          </a>
                        </li>
                        <li>
                            <div class="box-set">
                                <a href="">worship with us</a>
                              </div>
                            <a href="">
                              <img src="images/slid-5.jpg" alt="">
                            </a>
                          </li>
                          <li>
                              <div class="box-set">
                                  <a href="">worship with us</a>
                                </div>
                              <a href="">
                                <img src="images/slid-6.jpg" alt="">
                              </a>
                            </li>


                  </ul>
                </div>










    @endsection

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
  //total count of slides
  let slideCount = 5;
  //counter that keeps track of which slide we are on
  let counter = 5;
  //state of the toggle to pause and resume on mouseover
  let paused = false;
  //time in between slider changes (ms)
  let delay = 4000;
  //fade delay
  let fadeDelay = 2000;
  console.log("Variables done");
  //slides
  const $slideTwo = $("#slideTwo");
  const $slideThree = $("#slideThree");
  const $slideFour = $("#slideFour");
  const $slideFive = $("#slideFive");

  //main function handling the image toggle
  function slideImage() {
    //if mouseOver => Pause
    //else, slide...
    if (paused === false) {
      switch (counter) {
        case 1:
          //if counter is 1, ie. at the first slide => bring it to 0
          counter--;
          break;
        case 2:
          $slideTwo.fadeToggle(fadeDelay);
          counter--;
          break;
        case 3:
          $slideThree.fadeToggle(fadeDelay);
          counter--;
          break;
        case 4:
          $slideFour.fadeToggle(fadeDelay);
          counter--;
          break;
        case 5:
          $slideFive.fadeToggle(fadeDelay);
          counter--;
          break;
        default:
          $slideFive.fadeToggle(fadeDelay);
          // + 2000 to mask the return to slideFine
          $slideTwo.fadeToggle(fadeDelay + 2000);
          $slideThree.fadeToggle(fadeDelay + 2000);
          $slideFour.fadeToggle(fadeDelay + 2000);
          counter = 5;
          break;
      } //end of paused ture?
    } //end of switch
  } //end of slideImage

  //setting the function to be called at an interval
  var interval = setInterval(slideImage, delay);

  //mouse exit => stop sliding
  $(".slide").on("mouseover", function() {
    console.log("mouse has entered");
    paused = true;
  });

  //mouse exit => continue sliding
  $(".slide").on("mouseout", function() {
    console.log("mouse has left");
    paused = false;
  });
}); //end of doc ready
</script>


{{-- script for card toggling --}}
<script>
$(window).load(function() {
  $(".post-module").hover(function() {
    $(this)
      .find(".description")
      .stop()
      .animate(
        {
          height: "toggle",
          opacity: "toggle"
        },
        300
      );
  });
});
</script>


