<meta
 http-equiv="refresh"
 content="0; URL='comingsoon'"
/>
<?php 
include "./components/header.php";
include "./components/navbar.php";
?>
    <!-- hero -->
    <section class="cover bg-black text-white overflow-hidden">
      <div class="container foreground">
        <div class="row align-items-center justify-content-center vh-md-100">
          <div class="col-md-8 text-center text-shadow">
            <h1 class="display-2 font-weight-bold">Work space you'll fall in love with</h1>
          </div>
        </div>
      </div>
      <span class="scroll-down"></span>
      <figure class="image image-scroll image-overlay" 
      data-top-top="transform: scale(1); opacity: .8;"
      data-top-bottom="transform: scale(1.1); opacity: 0;">
      <video autoplay muted loop style="width: 100%">
        <source src="./assets/video/bgvideo.mp4" type="video/mp4">
      </video>
      </figure>
    </section>


    <!-- text -->
    <section>
      <div class="container">
        <div class="row gutter-4 gutter-lg-6 justify-content-between">
          <div class="col-lg-7">
            <div class="row">
              <div class="col">
                <h2 class="font-weight-bold">We create beautiful, functional spaces through an understanding</h2>
              </div>
            </div>
            <div class="row gutter-2 gutter-lg-6 align-items-center justify-content-md-between">
              <div class="col-10 col-md-4 col-lg-5"><h4 class="text-muted font-weight-normal"><span class="text-black d-block">1000 ft</span> available space</h4></div>
              <div class="d-none d-md-block col-md-2 col-lg-2"><div class="divider"></div></div>
              <div class="col-10 col-md-4 col-lg-5"><h4 class="text-muted font-weight-normal"><span class="text-black d-block">100mb</span> internet</h4></div>
            </div>
          </div>
          <div class="col-md-8 col-lg-4">
            <blockquote class="blockquote">
              <p>“Build better websites. A new template inspired by the world’s best design practices.”</p>
              <footer class="blockquote-footer">
                <div class="d-flex align-items-center">
                  <img src="assets/images/demo/avatar-1.jpg" alt="Avatar" class="avatar">
                  <div class="ml-2">
                    <p class="text-black mb-0">Michael Doe</p>
                    <small>Creative Lead</small>
                  </div>
                </div>
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </section>


    <!-- carousel -->
    <section class="overflow-hidden pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="fade-left">
            <div class="carousel-container carousel-container-visible">
              <div class="carousel" data-carousel='{"mouseDrag": true, "gutter": 48, "loop": true, "items": 1, "navContainer": "#nav-1","controlsContainer": "#controls-1"}'>
                <div class="item">
                  <figure class="figure hover-opacity equal equal-16-10">
                    <span class="image" title="Image Title" style="background-image: url('assets/images/coworking-2.jpg')"><span>
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                  </figure>
                </div>

                <div class="item">
                  <figure class="figure hover-opacity equal equal-16-10">
                    <span class="image" title="Image Title" style="background-image: url('assets/images/coworking-3.jpg')"><span>
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                  </figure>
                </div>

                <div class="item">
                  <figure class="figure hover-opacity equal equal-16-10">
                    <span class="image" title="Image Title" style="background-image: url('assets/images/coworking-4.jpg')"><span>
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                  </figure>
                </div>

                <div class="item">
                  <figure class="figure hover-opacity equal equal-16-10">
                    <span class="image" title="Image Title" style="background-image: url('assets/images/coworking-5.jpg')"><span>
                    <figcaption class="figure-caption">A caption for the above image.</figcaption>
                  </figure>
                </div>
              </div>

              <ul class="carousel-controls" id="controls-1">
                <li class="prev"><i class="icon-chevron-left"></i></li>
                <li class="next"><i class="icon-chevron-right"></i></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="carousel-nav" id="nav-1">
              <li><span></span></li>
              <li><span></span></li>
              <li><span></span></li>
              <li><span></span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- accordion -->
    <section class="bg-black text-white">
      <div class="container foreground">
        <div class="row">
          <div class="col">
            <div class="accordion accordion-minimal" id="accordion-4">
              <div class="card">
                <div class="card-header" id="heading-4-1">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-4-1" aria-expanded="true" aria-controls="collapse-4-1">
                      New York, USA
                    </button>
                  </h5>
                </div>

                <div id="collapse-4-1" class="collapse show" aria-labelledby="heading-4-1" data-parent="#accordion-4">
                  <div class="card-body">
                    <div class="row justify-content-between">
                      <div class="col-lg-5">
                        <p class="lead text-white mb-4">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quas non explicabo nulla? Ex, odit vel dicta laudantium, fugiat porro fuga distinctio voluptatibus officia hic voluptates, temporibus adipisci tempora et cum.</p>
                        <ul class="list-unstyled text-secondary">
                          <li><p>contact@webuildthemes.com</p></li>
                          <li><p>5th Avenue, New York 10001</p></li>
                        </ul>
                        <a href="#" class="btn btn-sm btn-primary btn-rounded btn-with-icon mt-2">Show Directions <i class="icon-arrow-right"></i></a>
                      </div>
                      <div class="col-lg-5">
                        <div class="canvas">
                          <div id="map1" class="map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading-4-2">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-4-2" aria-expanded="false" aria-controls="collapse-4-2">
                      London, UK
                    </button>
                  </h5>
                </div>
                <div id="collapse-4-2" class="collapse" aria-labelledby="heading-4-2" data-parent="#accordion-4">
                  <div class="card-body">
                    <div class="row justify-content-between">
                      <div class="col-lg-5">
                        <p class="lead text-white mb-4">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quas non explicabo nulla? Ex, odit vel dicta laudantium, fugiat porro fuga distinctio voluptatibus officia hic voluptates, temporibus adipisci tempora et cum.</p>
                        <ul class="list-unstyled text-secondary">
                          <li><p>contact@webuildthemes.com</p></li>
                          <li><p>5th Avenue, New York 10001</p></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="heading-4-3">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse-4-3" aria-expanded="false" aria-controls="collapse-4-3">
                      Stockholm, Sweden
                    </button>
                  </h5>
                </div>
                <div id="collapse-4-3" class="collapse" aria-labelledby="heading-4-3" data-parent="#accordion-4">
                  <div class="card-body">
                    <div class="row justify-content-between">
                      <div class="col-lg-5">
                        <p class="lead text-white mb-4">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quas non explicabo nulla? Ex, odit vel dicta laudantium, fugiat porro fuga distinctio voluptatibus officia hic voluptates, temporibus adipisci tempora et cum.</p>
                        <ul class="list-unstyled text-secondary">
                          <li><p>contact@webuildthemes.com</p></li>
                          <li><p>5th Avenue, New York 10001</p></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- features -->
    <section>
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
          <div class="col-lg-4 text-center text-lg-left mb-6 mb-lg-0">
            <h2 class="font-weight-bold">Why you should choose us ?</h2>
          </div>
          <div class="col-lg-8">
            <div class="row gutter-4">
              <div class="col-md-6">
                <div class="card bg-primary text-white">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">24/7 Access</h5>
                    <p>Create reusable buttons. Build resizable cards. Make edits once and sync across your designs.</p>
                    <a href="#" class="underline action text-white">Learn More</a>
                  </div>
                  <div class="equal equal-4-3">
                    <figure class="canvas">
                      <img src="assets/images/figure-7.svg" alt="">
                    </figure>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card bordered border-default">
                  <div class="card-body">
                    <h5 class="card-title font-weight-bold">Friendly Community</h5>
                    <p>Create reusable buttons. Build resizable cards. Make edits once and sync across your designs.</p>
                    <a href="#" class="underline action">Learn More</a>
                  </div>
                  <div class="equal equal-4-3">
                    <figure class="canvas">
                      <img src="assets/images/figure-6.svg" alt="">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- testimonial -->
    <section class="wrap bg-black mx-lg-3">
      <div class="foreground mb-10 mb-lg-0">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 text-white">
              <blockquote class="blockquote blockquote-2">
                <p>Friendly support agents who are always there to help. Great overall experience with these guys. Totally recommend.</p>
                <footer class="blockquote-footer">
                  <span class="text-white mr-1">Valerie Doe</span>
                  <span>Google CEO</span>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
      <div class="background">
        <div class="container-fluid">
          <div class="row justify-content-end">
            <div class="col-lg-6">
              <div class="image image-scroll" style="background-image: url('assets/images/coworking-6.jpg')"
                data-bottom-top="transform: translateY(-20%);" 
                data-top-bottom="transform: translateY(0%);"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- blog -->
    <section class="border-bottom">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 order-lg-2 mb-4 mb-lg-0">
            <h2 class="font-weight-bold mb-1">Latest news</h2>
            <a href="#" class="action underline text-secondary">To the blog <i class="icon-arrow-right"></i></a>
          </div>
          <div class="col-lg-8 order-lg-1">
            <div class="row gutter-4">
              <div class="col-md-6">
                <a href="#" class="card equal equal-3-4 hover-gradient hover-arrow text-white">
                  <figure class="image" style="background-image: url('assets/images/small-1.jpg')"></figure>
                  <div class="card-footer">
                    <div>
                      <time datetime="2020-12-18 20:00" class="eyebrow text-muted mb-1">20:00, 18 December</time>
                      <h5 class="card-title">Ethical Considerations In UX Research: The Need For Training And Review</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-6">
                <a href="#" class="card equal equal-3-4 hover-gradient hover-arrow text-white">
                  <figure class="image" style="background-image: url('assets/images/small-2.jpg')"></figure>
                  <div class="card-footer">
                    <div>
                      <time datetime="2020-12-18 22:00" class="eyebrow text-muted mb-1">22:00, 18 December</time>
                      <h5 class="card-title">How To Optimize Progressive Web Apps: Going Beyond The Basics</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>


    <!-- pricing -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="font-weight-bold">Plans that fit your needs.</h2>
          </div>
        </div>
        <div class="row gutter-4 gutter-lg-6 align-items-end">
          <div class="col-lg-8">
             <div class="row gutter-0 separated">
               <div class="col bg-white">
                 <div class="card">
                   <div class="card-body">
                     <h2 class="mb-4 font-weight-bold">$49</h2>
                     <p class="mb-4 text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Aperiam, dolorem maiores quis</p>
                     <ul class="list-unstyled mb-4">
                       <li class="py-1">6 Premium accounts</li>
                       <li class="py-1">Ad-free usic listening</li>
                       <li class="py-1">Listen to music ad-free</li>
                     </ul>
                     <div>
                       <a href="#" class="btn btn-outline-primary btn-rounded btn-block btn-with-icon">Buy Now <i class="icon-arrow-up-right"></i></a>
                       <small class="d-block text-muted text-center mt-1">30 days free trial</small>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col bg-white">
                 <div class="card">
                   <div class="card-body">
                     <h2 class="mb-4 font-weight-bold">$149</h2>
                     <p class="mb-4 text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Aperiam, dolorem maiores quis</p>
                     <ul class="list-unstyled mb-4">
                       <li class="py-1">6 Premium accounts</li>
                       <li class="py-1">Ad-free usic listening</li>
                       <li class="py-1">Listen to music ad-free</li>
                     </ul>
                     <div>
                       <a href="#" class="btn btn-outline-primary btn-rounded btn-block btn-with-icon">Buy Now <i class="icon-arrow-up-right"></i></a>
                       <small class="d-block text-muted text-center mt-1">30 days free trial</small>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
          </div>

          <div class="col-lg-4">
             <div class="card bordered border-default">
               <div class="card-body">
                 <h2 class="mb-4 font-weight-bold">$449</h2>
                 <p class="mb-4 text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Aperiam, dolorem maiores quis</p>
                 <ul class="list-unstyled mb-4">
                   <li class="py-1">6 Premium accounts</li>
                   <li class="py-1">Ad-free usic listening</li>
                   <li class="py-1">Listen to music ad-free</li>
                 </ul>
                 <div>
                   <a href="#" class="btn btn-primary btn-rounded btn-block btn-with-icon">Buy Now <i class="icon-arrow-up-right"></i></a>
                   <small class="d-block text-muted text-center mt-1">30 days free trial</small>
                 </div>
               </div>
             </div>
           </div>
        </div>
      </div>
    </section>   


    <!-- cta -->
    <section class="pt-0">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="#" class="card bg-primary text-white hover-arrow px-5">
              <div class="row">
                <div class="col-lg-6 py-5">
                  <h4 class="font-weight-bold">Got special requests ?
                  <br>Get in touch.</h4>
                </div>
                <div class="col-lg-3">
                  <figure class="canvas">
                    <img src="assets/images/figure-4.svg" alt="">
                  </figure>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

<?php include "./components/footer.php"; ?>    