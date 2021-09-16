<?php
$a=1.23456789;
$b=1.23456780;
$elipson=0.000001;
if(abs($a-$b)<$elipson){
	echo 'true';
}
?>