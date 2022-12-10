<?php
include '../data access layer/db.php';
if ( $_SERVER['REQUEST_METHOD'] == 'POST'
    and isset($_POST["password"]) and isset($_POST["Username"]) ) {

    $password = $_POST['password'];
    $Username = $_POST['Username'];
    $sql = " select * from admin  WHERE email = '$Username'and password='$password'";
    $result = mysqli_query($conn, $sql);
    if (!mysqli_num_rows($result) == 0) {$_SESSION['Username']= $Username;
        if ($Username =="admin@admin.com"){
            header('Location:admin.php');
        }else{
            header('Location:index.php');
        }
    }}
?>