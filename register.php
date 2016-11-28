<!DOCTYPE html>
<html>
  <head>
    <title>Graffiti Database Registration</title>
    <!-- Include CSS File Here -->
    <link href="assets/css/styles.css" rel="stylesheet"></link>
    <!-- Include PHP File Here -->
    <?php
      include 'connect.php';
      include 'function.php';
      /* if(loggedin){
        header('location: home.php');
      } */
    ?>
  </head>
  <body>
    <div class="container" id="register-container">
      <div class="register-main">
        <h2 class="register-header">Graffiti Database Registration</h2>
        <form id="register-form" method="post" name="myform">
          <label>Email :</label>
          <input type="email" name="email" id="email"/>
          <label>Name :</label>
          <input type="text" name="name" id="name"/>
          <label>Username :</label>
          <input type="text" name="username" id="username"/>
          <label>Access ID :<p class="more" title="This is the Identification code or employee ID given to you by the head office upon gaining authorization to the State Graffiti Task Force Database. Please contact the main branch/head office if you have lost yours or if you think this is a mistake. They can be reached at 858-555-5555, at support@wapd.com, or in person (office hours 8-5pm Mon-Fri).">What is this?</p></label>
          <input type="text" name="access-id" id="access-id"/>
          <label>Password :</label>
          <input type="password" name="password" id="password"/>
          <label>Confirm Password :</label>
          <input type="password" name="password-confirm" id="password-confirm"/>
          <input type="submit" name="register_button" value="Register" id="submit"/>
          <div class="feedback">
            <?php
              if(isset($_POST['register_button'])){
                $email = $_POST['email'];
                $name = $_POST['name'];
                $username = $_POST['username'];
                $access_id = $_POST['access-id'];
                $password = $_POST['password'];
                $password_confirm = $_POST['password-confirm'];
                //make sure no fields are empty
                if(empty($email) or empty($name) or empty($username) or empty($access_id) or empty($password) or empty($password_confirm)){
                  echo '*One or more fields are empty, please try again';
                }
                //make sure username doesn't already exist
                //$test = real_escape_string($test); //to make sure it sends safe strings to sql (no weird characters)
                /*else if(mysql_query("SELECT 1 FROM users WHERE username='$username' LIMIT 1") != NULL) {
                  echo '*Username already exists'; //failing for some reason
                }
                //make sure access-id doesn't already exist
                else if(mysql_query("SELECT 1 FROM users WHERE access_id='$access_id' LIMIT 1") != NULL) {
                  echo '*Access ID already redeemed'; //failing for some reason
                }*/
                //make sure access-id is valid
                else if($access_id != "helloworldkitty") {
                  echo '*Access ID is INVALID';
                }
                //make sure password and password-confirm match
                else if($password != $password_confirm) {
                  echo '*Passwords do not match';
                }
                else {
                  mysql_query("INSERT INTO 'users' VALUES (NULL, '$name', '$username', '$email', '$password', 'crew', '$access_id')");
                  $query = mysql_query("SELECT 1 FROM users WHERE access_id='$access_id' LIMIT 1");
                  $run = mysql_fetch_array($query);
                  $username_test = $run[username];
                  echo $username_test;
                  echo 'created successfully';
                }
              }
            ?>
          </div>
          <a class="login-link" href="index.php" title="Already have an account?">Already have an account?</a>
        </form>
      </div>
    </div>
  </body>
</html>
