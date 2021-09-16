<?php
	$a=1234;//decimal number
	$an=01234;//octal number
	$b=0x1A;//hexa decimal number
	$c=0b11111111;//binary number
	$ac=1_2_3_45_6;
	$large_number=100000;
	var_dump($large_number);

	$l_number=2335566666778897890909090788;
	var_dump($l_number);

	$million=567899098;
	$large_number=100000*$million;
	var_dump($large_number);

	var_dump(25/7);
	var_dump((int)(25/7));
	var_dump(round(25/7));
?>