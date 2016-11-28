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
        <div class="page" id="account-info">
          <h1>Account Info</h1>
          <div class="user-information">
            <h2>User Information</h2>
            <label>Username :</label>
            <p>Admin</p>
            <label>Name :</label>
            <p>John Wayne</p>
            <label>Email :</label>
            <p>abcd@gmail.com</p>
            <label>Permission Level :</label>
            <p>Site Owner</p>
          </div>
          <div class="update-information">
            <h2>Update Information</h2>
            <label>Name :</label>
            <input type="text" name="name" id="name" placeholder=""/>
            <label>Email :</label>
            <input type="email" name="email" id="email" placeholder=""/>
            <label>Password :</label>
            <input type="text" name="password" id="password" placeholder=""/>
            <label>Confirm Password :</label>
            <input type="text" name="password-confirm" id="password-confirm" placeholder=""/>
            <div class="options">
              <input type="button" value="Update" id="submit" onclick=""/>
            </div>
          </div>
        </div>
      </div>
    </body>
    <footer class="footer">
      <div id="company-name"><img src="assets/images/icon.png" alt="Utah Icon" />Utah Technologies</div>
      <div id="copyright">@Copyright 2016</div>
    </footer>
</html>