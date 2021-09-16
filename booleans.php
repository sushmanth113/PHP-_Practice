<?php

$foo=TRUE;
 echo $foo;
$action=TRUE;
$show_seperators=TRUE;

if($action=="show_version"){
	echo "The version is 7.4";
}

if($show_seperators==TRUE){
	echo "<hr>/n";
 }
if($show_seperators){
	echo"<hr>/n";
}
?>
