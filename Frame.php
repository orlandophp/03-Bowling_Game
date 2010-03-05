<?php

class Frame
{
    protected $balls_remaining;
    protected $balls = array();


    public function __construct($isLastframe = false) {


        $this->balls_remaining = 2;

    }

    public function ball ($numberOfPinsHit)
    {
        $this->balls[] = $numberOfPinsHit;
        return $this;
    }

    public function getScore ( )
    {
        $score = 0;
        foreach($this->balls as $pinCount) $score += $pinCount;
        return $score;
    }

    public function getBallsRemaining() {
       return $this->balls_remaining;
    }
}
