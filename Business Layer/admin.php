<?php

include ('../data access layer/db.php');
include '../Business Layer/check_admin.php';
function del() {
    echo 'I just ran a php function';
}
if (isset($_GET['del'])) {
    del();
}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    if (!empty($_POST)) {
        if (!isset($_POST['name']) and !isset($_POST['price']) and  !isset($_POST['description']) and !isset($_POST['categoryID'])){
            $id= $_POST['id'];
            $sql = "DELETE FROM  item where ID='$id'";
        }else{
            include 'upload.php';
            $name = $_POST['name'];
            $price = $_POST['price'];
            $descr = $_POST['description'];
            $logo = $logo2;
            $category = $_POST['categoryID'];
            if ($logo !== 'uploads/') {
                $sql = "INSERT INTO `item`( `CategoryId`, `name`, `description`, `logo`, `price`) VALUES (
                                    '$category',
                                    '$name',
                                     '$descr',
                                    '$logo',
                                    '$price')";
            } else {
                $sql = "INSERT INTO `item`( `CategoryId`, `name`, `description`, `price`) VALUES (
                                          '$category',
                                    '$name',
                                     '$descr',
                                    '$price')";
            }

        }



        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>