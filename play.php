<?php
//echo 'It\'s a traapp!';
require __DIR__.'/lib/Ship.php';


function printShipSummary($someShip)
{
    echo 'Ship Name: '.$someShip->getName();
    echo '<hr/>';
    $someShip->sayHello();
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(false);
    echo '<hr/>';
    echo $someShip->getNameAndSpecs(true);
}

$myShip = new Ship();

$myShip->name = 'Tie Fighter';
$myShip->weaponPower = 10;


printShipSummary($myShip);

$otherShip = new Ship();
$otherShip->name = 'Imperial Shuttle';
$otherShip->weaponPower = 5;
$otherShip->strength = 50;

echo'<hr/>';
printShipSummary($otherShip);


echo'<hr/>';
if($myShip->doesGivenShipHaveMoreStrength($otherShip)){
echo $otherShip->name.' has more strength';
} else{
echo $myShip->name. ' has more strength';
}