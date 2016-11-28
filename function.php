<?php
  session_start();
  function loggedin() {
    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
      return true;
    }
    else {
      return false;
    }
  }
  function getuser() {
    if(loggedin) {
      return $_SESSION['username'];
    }
    return null;
  }
?>
