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
// The following statement shows how to get external variables
// the URL should be changed to http://..../demo0302.php?visitor1_name=xxxxx&visitor2_name=yyyyy
// to pass the variable into this php
      echo "Welcome {$_GET['visitor1_name']} and {$_GET['visitor2_name']} to $shopName ";
      echo "Time now ", date("Y-m-d H:i:s");
      phpinfo();
    ?>
  </body>
</html>
