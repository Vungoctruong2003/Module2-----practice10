<?php
include_once "Dancer.php";
include_once "DancerSquare.php";

$dancer1 = new Dancer("truong", "male");
$dancer2 = new Dancer("han", "male");
$dancer3 = new Dancer("thanh", "male");
$dancer4 = new Dancer("ha", "female");
$dancer5 = new Dancer("dua", "female");

$dancerSquare = new DancerSquare();
$dancerSquare->addDancer($dancer1);
$dancerSquare->addDancer($dancer2);
$dancerSquare->addDancer($dancer3);
$dancerSquare->addDancer($dancer4);
$dancerSquare->addDancer($dancer5);

 echo $dancerSquare->pairDance();
 echo $dancerSquare->pairDance();
 echo $dancerSquare->pairDance();