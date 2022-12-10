<?php

if((!isset($_SESSION['Username'])))
{
    header('Location:log.php');
}
?>