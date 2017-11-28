<?php
session_start();
unset($_SESSION['adm']);
unset($_SESSION['regid2']);
unset($_SESSION['did2']);
unset($_SESSION['rid2']);
unset($_SESSION['arid2']);


header('location:../userlogin.php');
?>