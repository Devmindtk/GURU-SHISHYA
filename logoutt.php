<?php
session_start();
unset($_SESSION['username']);
header("location:studenthome.php");
?>