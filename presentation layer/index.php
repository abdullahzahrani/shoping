<!DOCTYPE html>
<html >
<head>

    <?php
    include '../data access layer/index.php';

    ?>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="images/logo.png" type="">
    <title>index</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

    <!--Boostrap jQuery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<div class="hero_area">
    <!-- header section strats -->
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
                            <a class="nav-link active2"  href="index.php">Home <span class="sr-only">(current)</span></a>
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

    <section class="slider_section ">
        <div class="slider_bg_box" style="background: #d6d6d6" >
            <img src="images/undraw_credit_card_payment_re_o911.svg" alt="" style="width: 52%;
    height: 95%;">
        </div>
        <div dir="rtl" id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                    <span>
                                   Cards Explorer
                                    </span>
                                        <br>
                                        For Every Cards
                                    </h1>
                                 <p>Make purchasing gift cards easier,
                                    Those looking to purchase gift cards
                                     such as gaming, shopping, or phone company cards</p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        </div> </section>
</div>
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            <?php if ($category->num_rows > 0) {
                while($row = $category->fetch_assoc()) {
                    ?>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="<?php echo 'product1.php?id='.intval( $row["id"]);?>" class="option1">
                                        Explore
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src=" <?php   echo $row["logo"]; ?>" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php   echo $row["name"]; ?>
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
        </div>
        <div class="btn-box">
        </div>
    </div>
</section>
<div class="cpy_">
    <p class="mx-auto">Contact with us <a href="#"> cardsExplors@demo.com</a><br>
    </p>
</div>

</body>
<?  mysqli_close($conn);?>
</html>