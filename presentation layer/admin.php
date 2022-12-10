<!DOCTYPE html>
<html>
   <head>
       <?php
       include "../Business Layer/admin.php";
       include "../data access layer/admin.php";
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
      <title>admin</title>
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


      <div class="page">
          <div class="page-contant">
              <div class="container">
                  <div class="row">
                      <div class="col-md-8">
                          <div>
                              <div class="card-body">
                                  <div class="card-content">
                                      <table class="table table-striped">
                                          <thead>
                                          <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">NAME</th>
                                              <th scope="col">Price</th>
                                              <th scope="col">Edit</th>
                                              <th scope="col">Delete</th>
                                          </tr>
                                          </thead>
                                          <tbody id="generatedTableData">

                                              <?php if ($category->num_rows > 0) {
                                              while ($row = $category->fetch_assoc()) {
                                              ?>
                                              <tr>
                                              <th scope="row"><?php echo $row['id'] ?></th>
                                              <td><?php echo $row['name'] ?></td>
                                              <td><?php echo $row['price'] ?></td>
                                              <td><a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a></td>
                                                  <form action="admin.php" method="post">
                                                      <input type="hidden" name="id" value="<?php echo $row['id']?>">
                                                      <td><button data-toggle="modal"  name="" data-target="#deleteModalCenter" href='#' class="btn btn-danger">Delete</button></td>
                                                  </form>
                                              </tr> <?php
                                              }
                                              } else {
                                                  echo "0 results";
                                              }
                                              ?>

                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="special-form-card">
                              <div class="card-body">
                                  <div class="card-heading">
                                      <span id="insert-heading">Insert New Records</span>
                                  </div>
                                  <form enctype="multipart/form-data" action="admin.php" method="post" >
                                  <div class="card-content">
                                      <div class="form-group">
                                          <input type="text" name="name" id="title" class="form-control" placeholder="Enter Item name"/>
                                      </div>
                                      <div class="form-group">
                                          <input type="text" name="description" id="ageField" class="form-control" placeholder="Enter Description" />
                                      </div>
                                      <div class="card-content">
                                          <div class="form-group">
                                              <input type="number" name="price" id="price" class="form-control" placeholder="Enter price"/>
                                          </div>
                                      </div>
                                          <div class="card-content file-area">
                                              <label for="images">Images <span>Your images should be at least 500x500 wide</span></label>
                                              <input type="file" name="fileToUpload" id="fileToUpload"  multiple="multiple"/>
                                              </div>
                                      <select class="form-select" aria-label="Default select example" name="categoryID"  style="margin-bottom: 20px;">
                                          <option value="1">Phone</option>
                                          <option value="2">Gaming</option>
                                          <option value="3">shopping</option>
                                      </select>

                                      <div class="form-actions">
                                          <button id="insert-btn" type="submit" class="btn btn-success">
                                              Submit
                                          </button>
                                      </div>
                                  </div>
                                  </form>
                              </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="snackbar"></div>

      <!-- delete-model -->
      <div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle"
           aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="deleteModalLongTitle">Delete Record</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      Do you want to delete record from the table.
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" id="deleteModelBtn">
                          Delete
                      </button>
                      <button id="deleteCnlModelBtn" type="button" class="btn btn-secondary" data-dismiss="modal">
                          Cancel
                      </button>
                  </div>
              </div>
          </div>
      </div>
   </body>
</html>