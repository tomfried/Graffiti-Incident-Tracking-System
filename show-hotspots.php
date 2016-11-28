<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8"></meta>
      <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
      <link rel="icon" href="/favicon.ico" type="image/x-icon">
      <link href="assets/css/styles.css" rel="stylesheet"></link>
      <script src="assets/javascript/javascript.js"></script>
      <?php
        include 'connect.php';
        include 'function.php';
        if(!loggedin) {
          header('location: index.php');
        }
      ?>
    </head>
    <body>
      <div id="header">
        <div class="logo">
          <a href="home.php" title="Home">
            <img src="assets/images/header-logo.png" alt="Logo Banner" />
          </a>
        </div>
        <div class="menu-bar">
          <a class="logout" href="index.php" onclick="session_destory()"        title="Sign Out">Sign Out</a>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
              <?php
                  if(loggedin){
                      echo getuser();
                  }
              ?>
            </button>
            <div id="myDropdown" class="dropdown-content">
              <a href="userportal.php" title="User Portal">User Portal</a>
              <a href="accountinfo.php" title="Account Info">Account Info</a>
            </div>
          </div>
        </div>
        <div id="map_wrapper">
          <div id="map_canvas" class="mapping"></div>
            <!-- Map placeholder taken from: http://www.w3schools.com/graphics/tryit.asp?filename=trymap_intro -->
            <script>
            //code taken from https://wrightshq.com/playground/placing-multiple-markers-on-a-google-map-using-api-3/
            jQuery(function($) {
                // Asynchronously Load the map API
                var script = document.createElement('script');
                script.src = "//maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
                document.body.appendChild(script);
            });

            function initialize() {
                var map;
                var bounds = new google.maps.LatLngBounds();
                var mapOptions = {
                    mapTypeId: 'roadmap'
                };

                // Display a map on the page
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                map.setTilt(45);

                // Multiple Markers
                var markers = [
                    ['Chula Vista, CA', 32.6400, -117.0843],
                    ['Chula Vista, CA', 32.6450, -117.0633],
                    ['Chula Vista, CA', 32.6390, -117.0550],
                    ['Chula Vista, CA', 32.6350, -117.1000],
                    ['Chula Vista, CA', 32.6410, -117.0943],
                    ['Chula Vista, CA', 32.6450, -117.1033],
                    ['Chula Vista, CA', 32.6500, -117.0800],
                    ['Chula Vista, CA', 32.6600, -117.0960],
                    ['Chula Vista, CA', 32.6324, -117.0700]
                ];

                // Info Window Content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti1.jpg"</img> <p><b>Incident ID:</b> 1<br> <b>Submitter:</b> Ryan Troy<br><b>Crew ID:</b> 5421<br> <b>Supervisors Name:</b> John Stowe<br> <b>Street:</b> 1087 F St<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 4-25-2011<br> <b>Clean Up:</b> Normal<br> <b>Moniker:</b> Cribz<br> <b>Images:</b> <a href="#">7</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti2.jpg"</img> <p> <b>Incident ID:</b> 2<br> <b>Submitter:</b> Garrett Baron<br><b>Crew ID:</b> 8422<br> <b>Supervisors Name:</b> John Stowe<br> <b>Street:</b> 459 Lion Cir<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 7-25-2012<br> <b>Clean Up:</b> Extensive<br> <b>Moniker:</b> Bloodz<br> <b>Images:</b> <a href="#">7</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti3.jpg"</img> <p><b>Incident ID:</b> 3<br> <b>Submitter:</b> Ashton Koucherman<br><b>Crew ID:</b> 1562<br> <b>Supervisors Name:</b> John Stowe<br> <b>Street:</b> <i>(none)</i> <br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 1-12-2009<br> <b>Clean Up:</b> Minor<br> <b>Moniker:</b> TCP<br> <b>Images:</b> <a href="#">5</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti4.jpg"</img> <p><b>Incident ID:</b> 4<br> <b>Submitter:</b> Cedric La Mare<br><b>Crew ID:</b> 6224<br> <b>Supervisors Name:</b> Sharon Stone<br> <b>Street:</b> 3245 F St<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 3-29-2012<br> <b>Clean Up:</b> Minor<br> <b>Moniker:</b> LA Kings<br> <b>Images:</b> <a href="#">10</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti12.jpg"</img> <p><b>Incident ID:</b> 5<br> <b>Submitter:</b> Airi Pawnie<br><b>Crew ID:</b> 5407<br> <b>Supervisors Name:</b> John Stowe<br> <b>Street:</b> 4082 E St<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 11-28-2008<br> <b>Clean Up:</b> Major<br> <b>Moniker:</b> Swag<br> <b>Images:</b> <a href="#">7</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti11.jpg"</img> <p> <b>Incident ID:</b> 6<br> <b>Submitter:</b> Brielle Mochentash<br><b>Crew ID:</b> 4804<br> <b>Supervisors Name:</b> Kylie Mino<br> <b>Street:</b> 1225 Bay Blvd.<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 12-2-2012<br> <b>Clean Up:</b> Major<br> <b>Moniker:</b> ABC<br> <b>Images:</b> <a href="#">9</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti5.jpg"</img> <p><b>Incident ID:</b> 7<br> <b>Submitter:</b> Herrod Pudoonga<br><b>Crew ID:</b> 9608<br> <b>Supervisors Name:</b> John Stowe<br> <b>Street:</b> 9248 Chula Vista St.<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 8-6-2012<br> <b>Clean Up:</b> Normal<br> <b>Moniker:</b> Trump<br> <b>Images:</b> <a href="#">7</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti9.jpg"</img> <p><b>Incident ID:</b> 8<br> <b>Submitter:</b> Rhona Drake<br><b>Crew ID:</b> 6200<br> <b>Supervisors Name:</b> John Stowe<br> <b>Street:</b> 2551 D Ave.<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 10-14-2010<br> <b>Clean Up:</b> Monolithic<br> <b>Moniker:</b> Hillary<br> <b>Images:</b> <a href="#">2</a><br> </p>' + '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Chula Vista</h3>' +
                    '<img src="assets/images/graffiti10.jpg"</img> <p><b>Incident ID:</b> 9<br> <b>Submitter:</b> Colleen Green<br><b>Crew ID:</b> 2360<br> <b>Supervisors Name:</b> George Roberts<br> <b>Street:</b> 8341 I St<br> <b>City:</b> Chula Vista<br> <b>Zipcode:</b> 91909<br> <b>Date Found:</b> 9-15-2009<br> <b>Clean Up:</b> Normal<br> <b>Moniker:</b> Cribz<br> <b>Images:</b> <a href="#">3</a><br> </p>' + '</div>']
                ];

                // Display multiple markers on a map
                var infoWindow = new google.maps.InfoWindow(), marker, i;

                // Loop through our array of markers & place each one on the map
                for( i = 0; i < markers.length; i++ ) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0]
                    });

                    // Allow each marker to have an info window
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                        }
                    })(marker, i));

                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                }

                // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(14);
                    google.maps.event.removeListener(boundsListener);
                });

            }
            </script>
<script src="//maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize"></script>
            <!-- Map placeholder end-->
        </div>
        <!-- Footer (for copyright and what not) -->
      </div>
    </body>
    <footer class="footer">
      <div id="company-name"><img src="assets/images/icon.png" alt="Utah Icon" />Utah Technologies</div>
      <div id="copyright">@Copyright 2016</div>
    </footer>
</html>
