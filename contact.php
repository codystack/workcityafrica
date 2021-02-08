<?php
include "./components/header.php";
include "./components/navbaralt.php";
?>
    <section class="section-hero">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <h1 class="font-weight-bold">Experience Our Premium Working Space!</h1>
            <p>We provide healthy and conducive co-working spaces, private offices and prototype labs with state of the art facilities to inspire our members to do their best work and achieve their goals.</p>
            <hr class="my-4 fw-25 ml-0">
            <ul class="list-group list-group-sm list-group-minimal">
              <li class="list-group-item d-flex align-items-center">
                <span class="fw-25 text-muted">Email</span>
                info@workcityafrica.com
              </li>
              <li class="list-group-item d-flex align-items-center">
                <span class="fw-25 text-muted">Phone</span>
                07002229222, 09061602803
              </li>
              <li class="list-group-item d-flex align-items-center">
                <span class="fw-25 text-muted">Instagram</span>
                @workcityafrica
              </li>
            </ul>
          </div>
          <div class="col-lg-5">
            <div class="equal equal-2-1 equal-lg-1-1">
              <div class="canvas">
                <div id="map1" class="map"></div>
              </div>
            </div>
            <div class="card bg-black text-white">
              <div class="card-body">
                <h6>3rd & 4th floor, Polystar Building, 2nd Roundabout, Lekki phase 1, Lagos.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="border-top pb-8">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-10 col-lg-6">
            <h2 class="font-weight-bold">Let us hear from you directly!</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-6">
            <form>
              <div class="form-row">
                <div class="col">
                  <div class="form-group">
                    <label for="yourName">Your Name</label>
                    <input type="text" class="form-control" id="yourName" placeholder="Your Name">
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="yourCompany">Your Company</label>
                    <input type="text" class="form-control" id="yourCompany" placeholder="Your Company">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="yourEmail">Your Email</label>
                <input type="email" class="form-control" id="yourEmail" placeholder="Your Email">
              </div>
              <div class="form-group">
                <label for="yourMessage">Message</label>
                <textarea class="form-control" id="yourMessage" rows="3" placeholder="Message"></textarea>
              </div>
              <a class="btn btn-dark btn-lg btn-with-icon mt-3" href="#">
                Send Message <i class="icon-arrow-up-right"></i>
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>


<?php include "./components/footer.php"; ?>