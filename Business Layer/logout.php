<?php 
session_start();
session_destroy();
header("location:../presentation layer/index.php");
?>