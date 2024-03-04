<?php 

require_once 'MotorCycle.php';
require_once 'MotorShop.php';

$motor1 = new MotorCycle("Triumph", 765, "RoadSters", "4545k");
$motor2 = new MotorCycle("BMW", 1250, "Adventure", "5454K");
$motor3 = new MotorCycle("Honda", 500, "Naked", "444k");
$motor4 = new MotorCycle("Kawasaki", 900, "Naked", "8888k");
$motor5 = new MotorCycle("Aprilla", 1350, "Enduro", "9999k");
$motor6 = new MotorCycle("Ducati", 821, "Naked", "3333k");

$shop = new MotorShop();

$shop->addMotorCycle($motor1);
$shop->addMotorCycle($motor2);
$shop->addMotorCycle($motor3);
$shop->addMotorCycle($motor4);
$shop->addMotorCycle($motor5);
$shop->addMotorCycle($motor6);

//echo $shop;

//echo $shop->getMaxCCMotor();

$filterByType = $shop->getType("Naked");
foreach($filterByType as $motors){
    echo $motors . "<br>";
}



?>