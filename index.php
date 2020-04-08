<?php

include "Fan.php";

$fan1=new Fan();
$fan2=new Fan();

$fan1->setSpeedFast();
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setOn(true);

var_dump($fan1);
echo "<br><br>";
echo $fan1->toString();

echo "<br><br>";

$fan2->setSpeedMedium();
$fan2->setRadius(5);
$fan2->setColor('blue');
$fan2->setOn(false);
echo $fan2->toString();
echo "<br><br>";
var_dump($fan2);



