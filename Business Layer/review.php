<?php
include '../data access layer/db.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    if ( !empty($_POST) ) {
        $sqlquery = "INSERT INTO review (item_id, name,body, rating) VALUES (".$_GET['id'].", '".$_SESSION['Username'] ."','".$_POST['body']."', ".$_POST['rate'].")";

        if ($conn->query($sqlquery) === TRUE) {

        } else {
            echo "Error: " . $sqlquery . "<br>" . $conn->error;
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

    header('Location:../credit/');  die();}

$sql = "SELECT * FROM review where item_id =".$_GET['id'];
$category = mysqli_query($conn, $sql);
$sql2 = "SELECT * FROM item where id =".$_GET['id'];
$category2 = mysqli_query($conn, $sql2);

$sql8 = "SELECT sum(rating) AS `count` FROM `review` where item_id =".$_GET['id'];
$co=$co2=0;
$category8 = mysqli_query($conn, $sql8);
if ($category8->num_rows > 0) {
    while ($row8 = $category8->fetch_assoc()) {
        $co=  $row8['count'];}} else {echo "0 results";}

$sql9 = "SELECT count(rating) AS `count` FROM `review` where item_id =".$_GET['id'];
$category9 = mysqli_query($conn, $sql9);
if ($category9->num_rows > 0) {
    while ($row9 = $category9->fetch_assoc()) {
        $co2=  $row9['count'];}} else {echo "0 results";}
?>