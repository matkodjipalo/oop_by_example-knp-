<?php

class BattleResult
{
	private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

   	public function wereJediPowersUsed()
   	{
   		return $this->usedJediPowers;
   	}


   	public function getWinningShip()
   	{
   		return $this->winningShip;
   	}

   	public function getLosingShip()
   	{
   		return $this->losingShip;
   	}

   	/**
     * Was there a winner? Or did everybody die :(
     *
     * @return bool
     */
    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }
}