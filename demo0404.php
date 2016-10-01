<?php
$shop_name = "Al's Cafe Shop";
// demonetrates how to make a call to a function
welcome();

// a few example of PHP GLOBAL VARIABLES
echo "Your browser is {$_SERVER['HTTP_USER_AGENT']} <br>";
echo "Full path name of this PHP file is {$_SERVER['SCRIPT_FILENAME']} <br>";
echo "The way how request is sent : {$_SERVER['REQUEST_METHOD']} <br>";
echo "The request sent is {$_SERVER['REQUEST_URI']} <br>";

// demonstrates how to define a function 
function welcome()
{
// demonstrates how to use 'global' to extend the variable validity space
global $user_name, $shop_name;
// changed _GET or _POST to _REQUEST, this way, 
// it can take variables passed in through either _GET or _POST
echo "Hello {$_POST['user_name']}, Welcome to {$shop_name} <br>";
}

?>