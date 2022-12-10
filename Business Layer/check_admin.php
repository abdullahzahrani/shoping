<?php

if((!($_SESSION['Username'] =="admin@admin.com")))
{
    header('Location:log.php');
}
?>