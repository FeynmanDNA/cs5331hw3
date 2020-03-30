 <?php

$cookie_name = 'Flag';
$cookie_value = 'S9vjABuASDF9Ddf';
setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/');

$html = <<<EOT
<form action="#", method="GET">
<p>
What's your name?
<input type="text" name="name">
<input type="submit" value="Submit">
</p>
EOT;
// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
// Get input
$name = str_ireplace( '<script>', '', $_GET[ 'name' ] );

// Feedback for end user
$html .= "<pre>Hello ${name}</pre>";
}

echo $html

?>
