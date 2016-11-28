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
        <div class="page" id="analysis">
          <h1>Analysis</h1>
          <input type="button" value="Show all by Monikers" id="moniker" onclick=""/>
          <input type="button" value="Show all by Date" id="Date" onclick=""/>
          <head>
          <input type="button" value="Show all by Submitted" id="moniker" onclick=""/>
          <input type="button" value="Show all by Building Type" id="Date" onclick=""/>
          <input type="button" value="Show all by Cleanup Effort" id="Date" onclick=""/>
          <div id="barchart_material" style="width: 1000px; height: 600px;"></div>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['Year', 'Chula Vista', 'National City', 'Bonita', 'Logan Heights'],
                ['2014', 1000, 400, 200, 2000],
                ['2015', 1170, 460, 250, 1580],
                ['2016', 660, 1120, 300, 1520],
                ['2017', 1030, 540, 350, 1010]
              ]);
              /*var data = google.visualization.arrayToDataTable([
                ['Year', 'Chula Vista', 'National City', 'Bonita', 'Logan Heights', 'San Ysidro'],
                ['2014', 1000, 400, 200, 2000, 820],
                ['2015', 1170, 460, 250, 1580, 1050],
                ['2016', 660, 1120, 300, 1520, 1240],
                ['2017', 1030, 540, 350, 1010, 1500]
              ]);*/
              var options = {
                chart: {
                  title: 'Graffiti Reports',
                  subtitle: 'Chula Vista, National City, Bonita, Logan Heights: 2014-2017',
                },
                bars: 'horizontal' // Required for Material Bar Charts.
              };
              var chart = new google.charts.Bar(document.getElementById('barchart_material'));
              chart.draw(data, options);
            }
          </script>
        </div>
        <!-- Footer (for copyright and what not) -->
      </div>
    </body>
    <footer class="footer">
      <div id="company-name"><img src="assets/images/icon.png" alt="Utah Icon" />Utah Technologies</div>
      <div id="copyright">@Copyright 2016</div>
    </footer>
</html>