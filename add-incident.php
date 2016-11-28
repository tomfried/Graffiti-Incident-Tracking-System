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
        <div class="page" id="add-incident">
          <h1>File Incident</h1>
          <div class="crew-information">
            <h2>Crew Information</h2>
            <label>Crew ID :</label>
            <input type="text" name="crew-id" id="crew-id" placeholder="(1234)"/>
            <label>Supervisor name :</label>
            <input type="text" name="supervisor" id="supervisor" placeholder="(John Smith)"/>
            <label>Date found :</label>
            <input type="text" name="date" id="date" placeholder="(DD/MM/YYYY)"/>
            <label>Scale of cleanup effort :</label>
            <select name="role" class="list" id="cleaup"><option value="not-set">(Not-set)</option><option value="Minor">Minor: Under 1 hour</option><option  value="Normal">Normal: 1-2 hours</option><option value="Major">Major: 2-3 hours </option><option value="Extensive">Extensive: 3-4 hours</option><option value="Monolithic">Monolithic: 4+ hours</option></select>
          </div>
          <div class="graffiti-information">
            <h2>Graffiti Information</h2>
            <label>Street address or nearest cross street of vandalism :</label>
            <input type="text" name="street-address" id="street-address" placeholder="(5555 Parkington Ave, Chester, AU 92910)"/>
            <label>Type of building or structure :</label>
            <select name="role" class="list" id="type-of-building"><option value="not-set">(Not-set)</option><option value="Apartment">Apartment</option><option value="Industrial">Industrial Zone</option><option value="Office">Office</option><option     value="Residential">Residence</option><option value="Vehicle">Vehicle</option></select>
            <label>GPS Coordinates <b>(required)</b> :</label>
            <input type="text" name="gps-coordinates" id="gps-coordinates" placeholder="(55.1234,-01.2893)"/>
            <label>Moniker :</label>
            <input type="text" name="moniker" id="moniker" placeholder="(cribz)"/>
          </div>
          <div class="image-upload">
            <h2>Image Upload</h2>
            <input type="button" value="upload-images" id="upload-images" onclick=""/>
            <p><b>NOTE:</b> no more than 10 images per submission. If there are different monikers, please report them with the same address/GPS coordinates but as different/individual incidents.</p>
          </div>
          <div class="options">
            <input type="button" value="Cancel" id="cancel" onclick=""/>
            <input type="button" value="Submit" id="submit" onclick=""/>
          </div>
        </div>
        <!-- Footer (for copyright and what not) -->
      </div>
    </body>
    <footer class="footer">
      <div id="company-name"><img src="assets/images/icon.png" alt="Utah Icon" />Utah Technologies</div>
      <div id="copyright">@Copyright 2016</div>
    </footer>
</html>