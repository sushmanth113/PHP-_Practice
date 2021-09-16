<?php

$age = 25;

$result = match (true) {
    $age >= 65 => 'senior',
    $age >= 25 => 'adult',
    $age >= 18 => 'young adult',
    default => 'kid',
};

print_r($result);
?>