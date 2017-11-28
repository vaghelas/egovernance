<?php
session_start();
unset($_SESSION['tun']);
unset($_SESSION['regid4']);
unset($_SESSION['did4']);
unset($_SESSION['rid4']);
unset($_SESSION['arid4']);

header('location:../userlogin.php');
?>