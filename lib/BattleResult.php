<?php

class BattleResult
{
    private $usedJediPowers;
    private $winningShip;
    private $losingShip;
 
    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }
    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }
    /**
     * @return boolean
     */
    public function isUsedJediPowers()
    {
        return $this->usedJediPowers;
    }
    /**
     * @return Ship
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }
    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }
    /**
     * Was there a winner? or did everbody die :(
     *
     *@return bool
     */
    public function isThereAWinner()
    {
        return $this->getWinningShip() !==null;
    }
}