<?php
$a=3;
$b=2;
if ($a > $b):
    echo $a." is greater than ".$b;
elseif ($a == $b): // Note the combination of the words.
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

?>