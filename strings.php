<?php
$foo = 1 + "10.5";                // $foo is float (11.5)
$foo = 1 + "-1.3e3";              // $foo is float (-1299)
$foo = 1 + "-1.3e3";           // TypeError as of PHP 8.0.0, $foo is integer (1) previously
$foo = 1 + "3";                // TypeError as of PHP 8.0.0, $foo is integer (1) previously
$foo = 1 + "10 ";       // $foo is integer (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = 4 + "10.2 "; // $foo is float (14.2) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = "10.0  " + 1;          // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
$foo = "10.0  " + 1.0;        // $foo is float (11) and an E_WARNING is raised in PHP 8.0.0, E_NOTICE previously
?>