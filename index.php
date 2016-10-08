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
            <div class="panel panel-primary">
              <div class="panel-heading">Login</div>
              <div class="panel-body">
                <form role="form" class="form-horizontal" action="index.php" method="post">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Account</label> 
                    <div class="col-md-8">
                      <input type="text" placeholder="account name" name="user_name" value="" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4"></label>
                    <div class="col-md-8">
                      <button type="submit" name="button" class="btn btn-primary btn-block">Submit</button>
                    </div>
                  </div>
                </form>

                <!-- This demonstrates how a php section is inserted and how a variable -->
                <!-- input from a form is retrieved -->
                <?php
                  if (isset($_POST['user_name'])) {
                    echo "Hello! {$_POST['user_name']} Welcome to Al's Cafeteria";
                  }
                ?> 
              </div> <!-- panel-body -->              
            </div> <!-- panel panel-primary -->
          </div> <!-- class="col-md-3 col-sm-4" -->
        </div> <!-- shop_main -->

        <div id="shop_foot">
          <div>Address : xxxxxxx, Taipei, Taiwan</div>
          <div>Telephone : 02-23456789</div>
          <div>copyright © 2016 All Rights Reserved.</div>
        </div>  

    </div>
  </body>
 </html>