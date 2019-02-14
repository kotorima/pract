<?php 
require_once 'PC.php';

$pc = new View\PC('lorem','lesson', 'OLOLO');

echo $pc;

$refl = new ReflectionClass('View\PC');
$re = new View\PC();
$refl->getProperty('mouse')->setValue($re, 'foo');
$refl->getProperty('keyboard')->setValue($re, 'foo');
$refl->getProperty('monitor')->setValue($re, 'foo');

echo '<br>'.$re;
