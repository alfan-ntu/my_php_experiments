<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <title>My PHP Experiments</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.min.js"></script>
      <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/jquery-migrate.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
      <!-- Start using bootstrap to arrange the dispaly -->
      <!-- The class name matches to the class picker name in .css file -->
      <div class="container">
        <!-- the id name has to match to that in .css file -->
        <div id="shop_head">
          <a href="index.php">
            <img src="images/title.jpg" alt="My PHP Experiemtns" class="img-responsive">
          </a>
        </div>
        <!-- the id name has to match to that in .css file -->
        <div id="shop_main" class="row">
          <div class="col-md-9 col-sm-8">Main Content</div>
          <div class="col-md-3 col-sm-4">
            <!-- This demos how a form is created -->
            <form class="form" action="index.php" method="post">
              Account : 
              <input type="text" placeholder="Your Account" name="user_name" value=""> <br>
              <button type="submit" name="button">Submit</button>
            </form>
            <!-- This demonstrates how a php section is inserted and how a variable -->
            <!-- input from a form is retrieved -->
            <?php
              if (isset($_POST['user_name'])) {
                echo "Hello! {$_POST['user_name']} Welcome to Al's Cafeteria";
              }
            ?> 
          </div>
        </div>
    </div>
  </body>
 </html>