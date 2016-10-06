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
    <!-- This demos how a form is created -->
  	<form class="form" action="index.php" method="post">
  		Account : 
      <input type="text" placeholder="Your Account" name="user_name" value=""> <br>
      <button type="submit" name="button">Submit</button>
  	</form>
  </body>
 </html>