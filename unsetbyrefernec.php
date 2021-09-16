<?php
$a = 1;
$b =& $a;
unset($a); 
echo $a;
echo $b;
?>