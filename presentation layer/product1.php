<!DOCTYPE html>
<html>
<head>
    <?php include '../data access layer/product1.php';
    ?>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="images/logo.png" type="">
    <title>Phone Card</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
</head>
<body class="sub_page">
<div class="hero_area">
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
             <a class="navbar-brand" href="index.php"><img width="100" src="images/logo.png" alt="#"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <?php include '../Business Layer/nav.php'; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

</div>
<section class="inner_page_head">
    <div class="container_fuild">
        <div class="row">
            <div class="col-md-12">
                <div class="full">
                    <?php if ($category2->num_rows > 0) {
                    while($row = $category2->fetch_assoc()) {
                    ?>

                    <h3><?php   echo $row["name"]; ?></h3>
                        <?php
                    }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="product_section layout_padding">
    <div class="container">
        <div class="row">
            <?php if ($category->num_rows > 0) {
                while ($row = $category->fetch_assoc()) {

                    $sql8 = "SELECT sum(rating) AS `count` FROM `review` where item_id =".$row["id"];
                    $co=$co2=0;
                    $category8 = mysqli_query($conn, $sql8);
                    if ($category8->num_rows > 0) {
                        while ($row8 = $category8->fetch_assoc()) {
                            $co=  $row8['count'];}} else {echo "0 results";}

                    $sql9 = "SELECT count(rating) AS `count` FROM `review` where item_id =".$row["id"];
                    $category9 = mysqli_query($conn, $sql9);
                    if ($category9->num_rows > 0) {
                        while ($row9 = $category9->fetch_assoc()) {
                            $co2=  $row9['count'];}} else {echo "0 results";}

                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="review1.php?id=<?php echo$row["id"]; ?>" class="option1">
                                        review now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="<?php echo $row["logo"]; ?>" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php echo $row["price"]; ?>
                                </h5>
                                <h5>
                                    <?php

                                    if (isset($co))
                                    for ($x = 1; $x < $co/$co2; $x++) {
                                         ?>
                                        <span class="fa fa-star" style="color: #ffc107;"></span>
                                            <?php  }

                                    ?>

                                </h5>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
        <div class="btn-box">
        </div>
    </div>
</section>
<br><br><br><br><br><br><br><br><br><br>

<div class="cpy_">
    <p class="mx-auto">Contact with us <a href="#"> cardsExplors@demo.com</a><br>
    </p>
</div>
</body>
<? mysqli_close($conn); ?>
</html>