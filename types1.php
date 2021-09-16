<?php
$a_bool=TRUE;
$a_str="foo";
$a_str2='hello';
$a_int=23;

echo gettype($a_str);
echo gettype($a_bool);
echo gettype($a_str2);
echo gettype($a_int);

if(is_int($a_int)){
	$a_int+=4;
	echo $a_int;
}
if(is_bool($a_bool)){
	
	echo 'boolean value';
}

?>