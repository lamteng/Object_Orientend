<?php

class BattleManager
{
    /**
     * Out complex fighting alorithm!
     * 
     * @return array With keys winning_ship, losing_ship & used_jedi_powers
     */
    public function battle(Ship $ship1, $ship1Quantity, Ship $ship2, $ship2Quantity)
     {
        if (didJediDestroyShipUsingTheForce($ship1)) {
        }
        if (didJediDestroyShipUsingTheForce($ship2)) {
        }

        return array(
            'winning_ship' => $winningShip,
            'losing_ship' => $losingShip,
            'used_jedi_powers' => $usedJediPowers,
        );
     }

     private function didJediDestroyShipUsingTheForce(Ship $ship)
     {
        $jediHeroProbability = $ship->getJediFactor() / 100;
        
        return mt_rand(1,100) <= ($jediHeroProbability * 100);
     }
}