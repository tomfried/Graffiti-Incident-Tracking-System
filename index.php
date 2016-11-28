<!DOCTYPE html>
<html>
  <head>
    <title>Graffiti Database Sign-in</title>
    <!-- Include CSS File Here -->
    <link href="assets/css/styles.css" rel="stylesheet"></link>
    <!-- Include PHP File Here -->
    <?php
      include 'connect.php';
      include 'function.php';
      /*if(loggedin){
        header('location: home.php');
      }*/
    ?>
  </head>
  <body>
    <div class="container"  id="login-container">
      <div class="login-main">
        <h2 class="login-header">Graffiti Database Sign-in</h2>
        <form id="login-form" method="post" name="myform">
        <label>Username :</label>
        <input type="text" name="username" id="username"/>
        <label>Password :</label>
        <input type="password" name="password" id="password"/>
        <input type="submit" name="login_button" value="Login" id="submit"/>
        <div class="feedback">
          <?php
            if(isset($_POST['login_button'])){
              $username = $_POST['username'];
              $password = $_POST['password'];
              if(empty($username) or empty($password)){
                echo '*One or more fields are empty, please try again';
              }
              else {
                $query = mysql_query("SELECT id FROM users WHERE username='$username' AND password='$password'");
                $run = mysql_fetch_array($query);
                $id = $run[id];
                echo $id;
                if(!empty($id)) {
                  $_SESSION['user_id'] = $id;
                  $_SESSION['username'] = $username;
                  header('location: home.php');
                }
                else {
                  echo 'Wrong Username or Password';
                }
              }
            }
          ?>
        <a class="register-link" href="register.php" title="Register for an account">No account? Register here.</a>
        </div>
        </form>
      </div>
    </div>
  </body>
</html>
