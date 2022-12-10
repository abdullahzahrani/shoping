<?php

include '../data access layer/db.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST'
    and isset($_POST["password"]) and isset($_POST["Username"]) and isset($_POST["email"]) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Username = $_POST['Username'];

    $result = mysqli_query($conn,"SELECT * FROM  admin WHERE email = '$email'") or exit(mysqli_error()); //check for duplicates
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 0) {
        $sql = " INSERT INTO `admin`(`username`, `password`, `email`) VALUES (
                                    '$Username',
                                    '$password',
                                    '$email') ";

        if (!mysqli_query($conn,$sql))
        {
            die('Error: ' . mysqli_error());

        }else{
            header('Location:log.php');
        }
    }else{
        echo "you can't duplicate email";
    }

}
?>