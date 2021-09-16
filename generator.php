<?php
function control(){
	yield 'string';
	yield 100;
	yield 100.11;
	yield true;
}
$value=control();
foreach($value as $control){
	echo "<br>". $control;
}