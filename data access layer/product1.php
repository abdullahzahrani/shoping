<?php
include 'db.php';
$sql = "SELECT * FROM item where categoryid =".$_GET['id'];
$category = mysqli_query($conn, $sql);
$sql2 = "SELECT * FROM category where id=".$_GET['id'];
$category2 = mysqli_query($conn, $sql2);
function start(){
$sql8 = "SELECT sum(rating) AS `count` FROM `review` where item_id =".$row["id"];
$co=$co2=0;
$category8 = mysqli_query($conn, $sql8);
}
?>

