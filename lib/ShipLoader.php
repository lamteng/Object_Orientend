<?php

class ShipLoader
{
    public function getShips()
    {
        $ships = array();
    
        $ship1 = new Ship('Jedi Starfighter');
        $ship1->setName('Jedi Starfighter');
        $ship1->setWeaponPower(5);
        $ship1->setJediFactor(15);
        $ship1->setStrength(30);
        $ships['starfighter'] = $ship1;
    
        $ship2 = new Ship('Cloakshape Fighter');
        $ship2->setName('Cloakshape Fighter');
        $ship2->setWeaponPower(2);
        $ship2->setJediFactor(2);
        $ship2->setStrength(70);
        $ships['CloakshapeFighter'] = $ship2;
    
        $ship3 = new Ship('Super Star Destroyer');
        $ship3->setName('Super Star Destroyer');
        $ship3->setWeaponPower(70);
        $ship3->setJediFactor(0);
        $ship3->setStrength(500);
        $ships['SuperStarDestroyer'] = $ship3;
    
        $ship4 = new Ship('RZ-1 A-wing interceptor');
        $ship4->setName('RZ-1 A-wing interceptor');
        $ship4->setWeaponPower(4);
        $ship4->setJediFactor(4);
        $ship4->setStrength(50);
        $ships['Rz1AwingInterceptor'] = $ship4;
    
        return $ships;
    }
   
}