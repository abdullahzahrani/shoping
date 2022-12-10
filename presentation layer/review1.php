<!DOCTYPE html>
<html>
   <head>
       <?php
       include "../Business Layer/review.php";
       ?>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/logo.png" type="">
      <title>review</title>
      <!-- bootstrap core css -->
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
                           <?php include '../Business Layer/nav.php'; ?>
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
            <div class="col-lg-8">
            <main>
                <article>
                  <div class="img2 col-5 " style="display: block;margin-left: auto;margin-right: auto;">
                      <?php if ($category2->num_rows > 0) {
                      while ($row2 = $category2->fetch_assoc()) {

                      ?>
                     <img src="<?php echo $row2['logo'];?>" class="card" alt="img item">
                  </div>

                  <div id="disc" class="cnt" >
                     <h3><?php echo $row2['name'];?> </h3>
                     <p class="p1"><?php echo $row2['description'];?></p>
                      <?php
                      }
                      } else {
                          echo "0 results";
                      }
                     ?>
                      <?php
                      if (isset($co))
                              for ($x = 1; $x < $co/$co2; $x++) {
                                     ?>
                                  <img src="https://img.icons8.com/fluency/48/000000/star.png"/>
                              <?php  }
                      ?>
                  </div>
                            <?php if((isset($_SESSION['Username'])))
                            { ?>
                    <form method="post" action="review1.php?id=<?php echo $_GET['id'] ?>">
                        <div class="add_review">
                            <div class="cnt">
                                <p id="pda">Add comment</p>

                                <p class="rate">
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                </p>
                                <p>
                                    <textarea name="body" rows="4" cols="30" placeholder="Enter review here."></textarea>
                                </p>
                                <div class="btn-box">
                                    <button style="display: inline-block;
    padding: 10px 40px;
    background-color: #009688;
    border: 1px solid #009688;
    color: #ffffff;
    border-radius: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    margin-bottom: 20px;">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    $sql3 = "SELECT * FROM review where item_id =".$_GET['id'];
                    $category3 = mysqli_query($conn, $sql3);
                    if ($category3->num_rows > 0) {
                    while ($row3 = $category3->fetch_assoc()) {

                        ?>
                        <!--Start  review for user -->
                        <div class="card">
                            <h5><?php echo $row3['name'];?></h5>
                            <p><?php echo $row3['body'];?></p>
                            <p class="ret">
                                <?php
                                for ($x = 0; $x < $row3['rating']; $x++){ if ($x===5) break;
                                    ?>
                                    <img src="https://img.icons8.com/fluency/48/000000/star.png"/>

                                <?php }?> </p>
                        </div>

                    <?php }
                                ?>
               </article>
            </main>
                <?php
                }

                } else {
                    echo "You must be logged in to see reviews";
                }
                ?>
            <div class="btn-box">

            </div>
         </div>
      </section><br><br><br><br><br><br><br><br><br><br>
      <div class="cpy_">
         <p class="mx-auto">Contact with us <a href="#"> cardsExplors@demo.com</a><br>
         </p>
      </div>
   </body>
</html>