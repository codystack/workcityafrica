    <!-- footer -->
    <footer class="bg-black text-white" style="margin-bottom: -5px">
        <div class="container">
            <div class="row justify-content-between gutter-2 gutter-lg-6">
                <div class="col-lg-4">
                    <a href="\" class="navbar-brand"><img src="assets/images/logo.svg" alt="Logo"></a>
                    <p class="mt-2 text-muted">Create a world where innovation, collaboration and creativity thrive.<br>Workcity Africa is not just a workplace, it is a home and we love it!</p>
                </div>
                <div class="col-lg-7">
                    <div class="row gutter-4">
                        <div class="col-md-4">
                            <span class="eyebrow text-muted mb-2 d-flex">Menu</span>
                            <ul class="nav nav-minimal nav-minimal-sm flex-md-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">FAQ's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Book a Tour</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Partnership</a>
                            </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <span class="eyebrow text-muted mb-2 d-flex">Follow us</span>
                            <ul class="nav nav-minimal nav-minimal-sm flex-md-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.instagram.com/workcityafrica/" target="_blank">Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.facebook.com/workcityafrica/" target="_blank">Facebook</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://twitter.com/workcityafrica" target="_blank">Twitter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.linkedin.com/company/workcity-africa/" target="_blank">Linkedin</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <span class="eyebrow text-muted mb-2 d-flex">Legal</span>
                            <ul class="nav nav-minimal nav-minimal-sm flex-md-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Conditions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Changelog</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gutter-1 gutter-lg-12 text-muted text-center">
                <div class="col-md-12 col-lg-12">
                <p class="small">© <script>document.write(new Date().getFullYear());</script> Workcity&reg; All Rights Reserved. Built by <a href="https://www.thankgodokoro.codes" target="_blank" class="text-white">TeeGee</a></p>
                </div>
            </div>
        </div>
        <!--<figure class="canvas">
            <svg width="100%" height="100%" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle data-aos="fade-up" data-aos-delay="200" cx="120%" cy="-40%" r="50%" stroke="white" stroke-opacity=".2" 
            data-center-top="@r: 50%;" 
            data-top-bottom="@r: 70%;"/>
            <circle data-aos="fade-up" data-aos-delay="400" cx="85%" cy="125%" r="75%" stroke="white" stroke-opacity=".2" 
            data-center-top="@r: 75%;" 
            data-top-bottom="@r: 95%;"/>
            <circle data-aos="fade-up" data-aos-delay="600" cx="-25%" cy="125%" r="50%" stroke="white" stroke-opacity=".2" 
            data-center-top="@cx: -25%;" 
            data-top-bottom="@cx: 45%;"/>
            </svg>
        </figure>-->
    </footer>

    <script>
      function initMap() {
          var latlng = new google.maps.LatLng(6.42996066284219, 3.4685043365407133);

          var myOptions = {
              zoom: 15,
              center: latlng,
              disableDefaultUI: true,
              styles: [
                {
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#f5f5f5"
                    }
                  ]
                },
                {
                  "elementType": "labels.icon",
                  "stylers": [
                    {
                      "visibility": "off"
                    }
                  ]
                },
                {
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#616161"
                    }
                  ]
                },
                {
                  "elementType": "labels.text.stroke",
                  "stylers": [
                    {
                      "color": "#f5f5f5"
                    }
                  ]
                },
                {
                  "featureType": "administrative.land_parcel",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#bdbdbd"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#eeeeee"
                    }
                  ]
                },
                {
                  "featureType": "poi",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#757575"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#e5e5e5"
                    }
                  ]
                },
                {
                  "featureType": "poi.park",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                },
                {
                  "featureType": "road",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#ffffff"
                    }
                  ]
                },
                {
                  "featureType": "road.arterial",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#757575"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#dadada"
                    }
                  ]
                },
                {
                  "featureType": "road.highway",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#616161"
                    }
                  ]
                },
                {
                  "featureType": "road.local",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                },
                {
                  "featureType": "transit.line",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#e5e5e5"
                    }
                  ]
                },
                {
                  "featureType": "transit.station",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#eeeeee"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "geometry",
                  "stylers": [
                    {
                      "color": "#c9c9c9"
                    }
                  ]
                },
                {
                  "featureType": "water",
                  "elementType": "labels.text.fill",
                  "stylers": [
                    {
                      "color": "#9e9e9e"
                    }
                  ]
                }
              ]
          };

          var map = new google.maps.Map(document.getElementById("map1"), myOptions);

          map.panBy(-100, -40);

          var myMarker = new google.maps.Marker(
          {
              position: latlng,
              map: map,
              icon: 'assets/images/pin.svg'
         });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAME5wJgLdn1aQSxC7-iWxJ3isuveK9Rv4&amp;callback=initMap"
    async defer></script>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>

</html>