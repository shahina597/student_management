<?php 
session_start();
unset($_SESSION['user_login']);
session_destroy();
header('Location:admin_login_index.php');

?>