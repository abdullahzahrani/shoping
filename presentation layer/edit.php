<!DOCTYPE html>
<html>
   <head>
       <?php
       include "../Business Layer/edit.php";
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
      <title>edit2</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <link rel="stylesheet" href="Home2.css">
      <link rel="stylesheet" href="Edit_item2.css">

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
                             <a class="nav-link" href="../Business%20Layer/logout.php">Log out</a>
                        </li>
                        <li class="nav-item">
                           
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
      </div>
    <link rel="shortcut icon" href="images/img.png" type="">
      <section class="product_section layout_padding">
         <div class="container">
            <div class="col-lg-8" style="    margin-left: auto;
    margin-right: auto;">
               <main>
                   <?php if ($category->num_rows > 0) {
                   while ($row = $category->fetch_assoc()) {

                   ?>
                  <form action method="post" enctype="multipart/form-data" action="edit.php?id=<?php echo $_GET['id'] ?>">

                     <h1 style="text-align: center;"><strong>Edit item</strong></h1>

                     <div class="form-group">
                        <label for="title">Item name </label>
                        <input type="text" name="name" value="<?php echo $row['name'] ?>" id="title" class="form-controll"/>
                     </div>
                     <div class="form-group">
                        <label for="caption">Description </label>
                        <input type="text" name="description" id="caption" value="<?php echo $row['description'] ?>" class="form-controll"/>
                     </div>
                     <div class="form-group">
                        <label for="caption">Price </label>
                        <input type="number" name="price" id="price" value="<?php echo $row['price'] ?>"" class="form-controll"/>
                     </div>
                     <img src="<?php echo $row['logo'] ?>" value="" alt="not load img" width="150" height="150">

                     <div class="form-group file-area">
                        <label for="images">Images <span>Your images should be at least 500x500 wide</span></label>
                        <input type="file" name="fileToUpload" id="fileToUpload"  multiple="multiple"/>
                     </div>
                     <select class="form-select" aria-label="Default select example" name="categoryID">
                        <option <?php  if ($row['CategoryId']==1) echo 'selected'; ?> value="1">Phone</option>
                        <option <?php  if ($row['CategoryId']==2) echo 'selected'; ?> value="2">Gaming</option>
                        <option <?php  if ($row['CategoryId']==3) echo 'selected'; ?> value="3">shopping</option>
                     </select>
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
                           Update
                        </button>
                     </div>
                  </form>
                       <?php
                   }
                   } else {
                       echo "0 results";
                   }
                   ?>
                   
                  <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>

               </main>
            <div class="btn-box">

            </div>
            </div></div>
      </section>
   
      <div class="cpy_">
         <p class="mx-auto">Contact with us <a href="#"> cardsExplors@demo.com</a><br>
         </p>
      </div>
   </body>
</html>