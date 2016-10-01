<?php
$shop_name = "Al's Cafe Shop";
// demonetrates how to make a call to a function
welcome();

// demonstrates how to define a function 
function welcome()
{
// demonstrates how to use 'global' to extend the variable validity space
global $user_name, $shop_name;
// changed _GET or _POST to _REQUEST, this way, 
// it can take variables passed in through either _GET or _POST
echo "Hello {$_POST['user_name']}，Welcome to {$shop_name}";
}

?>