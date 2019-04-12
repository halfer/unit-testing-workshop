<?php

class Dice
{
    protected $randomGenerator;

    public function __construct(RandomGenerator $randomGenerator)
    {
        $this->randomGenerator = $randomGenerator;
    }

    public function getDiceResultString()
    {
        $result = $this->getDiceValue();
        switch($result)
        {
            case 6:
                return $this->getAwesomeResult($result);
            default:
                return $this->getOrdinaryResult($result);
        }
    }

    public function getDiceValue()
    {
        return $this->getRandomGenerator()->generateDiceValue(6);
    }

    protected function getRandomGenerator()
    {
       return $this->randomGenerator;
    }

    protected function getOrdinaryResult($result)
    {
        return "You rolled a $result";
    }

    protected function getAwesomeResult($result)
    {
        return "Great! You got a $result";
    }
}
