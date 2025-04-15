 <!-- Map Column -->
            <div class="col-md-8">
    College Location
                <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>

                <div style="overflow:hidden;height:400px;width:100%;">
                  <div id="gmap_canvas" style="height:100%;width:100%;"></div>
                  <style>
                    #gmap_canvas img { max-width: none !important; background: none !important }
                  </style>
                </div>

                <script type="text/javascript">
                  function init_map() {
                    var myOptions = {
                      zoom: 17,
                      center: new google.maps.LatLng(15.5996607, 32.5120403),
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                    var map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);

                    var marker = new google.maps.Marker({
                      map: map,
                      position: new google.maps.LatLng(15.5996607, 32.5120403)
                    });

                    var infowindow = new google.maps.InfoWindow({
                      content: "<b>College of Graduate Studies</b><br/>Sudan University of Science and Technology"
                    });

                    google.maps.event.addListener(marker, "click", function () {
                      infowindow.open(map, marker);
                    });

                    infowindow.open(map, marker);
                  }

                  google.maps.event.addDomListener(window, 'load', init_map);
                </script>


            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    College of Graduate Studies | SUST
                <br>Al-Ghaba Ave, Khartoum, Sudan<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone"></abbr>: +249183796854 </p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email"></abbr>: <a href="mailto:name@example.com">cgs@sustech.edu</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours"></abbr>: Sunday - Thursday: 8:00 AM to 3:00 PM</p>
                
            </div>

 