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
        <!-- Navigation Bar -->
        <nav class="menu-bar">
          <div class="icons">
            <li class="add-incident-li">
              <a href="add-incident.php" title="Add Incident">Add Incident</a>
            </li>
            <li class="view-all-li">
              <a href="view-all.php" title="View All">View All</a>
            </li>
            <li class="show-hotspots-li">
              <a href="show-hotspots.php" title="Show Hotspots">Show Hotspots</a>
            </li>
            <li class="analysis-li">
              <a href="analysis.php" title="Analysis">Analysis</a>
            </li>
            <li class="support-li">
              <a href="support.php" title="Support">Support</a>
            </li>
          </div>
        </nav>
        <!-- Footer (for copyright and what not) -->
      </div>
    </body>
    <footer class="footer">
      <div id="company-name"><img src="assets/images/icon.png" alt="Utah Icon" />Utah Technologies</div>
      <div id="copyright">@Copyright 2016</div>
    </footer>
</html>
