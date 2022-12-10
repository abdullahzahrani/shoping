<?php
    include '../data access layer/db.php';
    $sql = "SELECT * FROM category";
    $category = mysqli_query($conn, $sql);


?>