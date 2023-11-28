
<?php 
session_start();
include "connect.php";
session_unset();
session_destroy();

header("Location: login.php");  // goto Login page
?>