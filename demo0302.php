<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Example demo0302</title>
  </head>
  <body>
    <h1>Tad deserts bar</h1>
    <?php
// The following statement shows how a variable is used
      $shopName = "Al's Cafe";
// The following statement shows how to get an external variable
// the URL should be changed to http://..../demo0302.php?user_name=xxxxx
// to pass the variable into this php
      echo "Welcome {$_GET['user_name']} to $shopName ";
      echo "Time now ", date("Y-m-d H:i:s");
      phpinfo();
    ?>
  </body>
</html>
