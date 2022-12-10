<?php
include '../data access layer/db.php';
include '../Business Layer/check_admin.php';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if ( !empty($_POST) ) {
        include 'upload.php';
        $name=$_POST['name'];
        $price=$_POST['price'];
        $id=$_GET['id'];
        $descr=$_POST['description'];
        $logo=$logo2;
        $category=$_POST['categoryID'];
        if($logo!=='uploads/')
        {
            $sql = "update item set name='$name',
                                    logo='$logo',
                                    price='$price',
                                    description='$descr',
                                    categoryID='$category'
                                    where ID='$id'";
        }else{
            $sql = "update item set name='$name',
                                        description='$descr',
                                         price='$price',
                                        categoryID='$category'
                                        where ID='$id'";
        }

        if ($conn->query($sql) === TRUE) {

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


    }

}

$expectedVars = array('var1', 'var2');
$proceed=0;
foreach($expectedVars as $key => $val) {
    if($_GET['id'] == "") {
        $proceed = 0;
    } else {
        $proceed = 1;
    }
}
if (!(isset($_GET['id']))||$proceed==0){

    header('Location:../presentation layer/log.php');  die();}



$sql = "SELECT * FROM item where id=".$_GET['id'];
$category = mysqli_query($conn, $sql);

?>