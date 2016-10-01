<?php
$shop_name = "Al's Cafe Shop";
// changed _GET or _POST to _REQUEST, this way, 
// it can take variables passed in through either _GET or _POST
echo "Hello {$_REQUEST['user_name']}，Welcome to {$shop_name}";
