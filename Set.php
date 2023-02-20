<?php
if(!Isset ($_COOKIE[$cookie_name])){
	echo "Name of the Cookie: ".$cookie_name ."isn't set yet!!!"; }
else{
	echo "Cookie '" . $cookie_name . "' is set!<br><br>";
  	echo "Value of the Cookie : " . $_COOKIE[$cookie_name];

}
?>