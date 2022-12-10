<!DOCTYPE html>
<html>
<head>
    <?php
    include "../Business Layer/reg.php";
    ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/logo.png" type="">
    <title>login</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link rel="stylesheet" href="css/itemProfile.css">

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
                        <li class="nav-item">
                            <a class="nav-link active2" href="logout.php">Log in</a>
                        </li>
                        <li class="nav-item">

                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

</div>
<section class="product_section layout_padding">
    <div class="container">

        <div class="col-4 button-box">
            <main>
                <form method="post" action="reg.php" class="input-group">
                    <h3 style="    margin-left: auto;
    margin-right: auto;">registration page </h3><br><br><br>
                    <input type="email" class="input-field" name="email" placeholder="email" required>
                    <input type="text" class="input-field" name="Username" placeholder="User name" required>
                    <input type="password" class="input-field" name="password" placeholder="Password" required>
                    <!--                  <input type="checkbox" class="chech-box"><span> Remember Password </span>-->

                    <button type="submit" class="submit-btn"> register </button>
                    <br><br><br><br>
                </form>
            </main>

        </div>
    </div> </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="cpy_">
    <p class="mx-auto">Contact with us <a href="#"> cardsExplors@demo.com</a><br>
    </p>
</div>
</body>
</html>