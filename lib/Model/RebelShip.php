<?php

class RebelShip extends Ship
{
    public function getFavoriteJedi()
    {
        $coolJedis = array('Yoda', 'Ben Kenobi');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    public function getType()
    {
        return 'Rebel';
    }

    public function getJediPower()
    {
    	return rand(10, 30);
    }

    public function isFunctional()
    {
        return true;
    }


    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Jedi)';

        return $val;
    }

}