<?php
session_start(); //Start the current session
unset($_SESSION['login.php']);
session_destroy(); //Destroy it! So we are logged out now
require('login.php'); // Move back to login.php with a logout message
?>
