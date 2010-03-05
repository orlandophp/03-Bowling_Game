<?php

require_once 'PHPUnit/Framework.php';

require_once 'Frame.php';

class FrameTest
extends PHPUnit_Framework_TestCase
{



    public function test_gutter ( )
    {
        $Frame = new Frame;

        $this->assertEquals(
            0, $Frame->ball(0)->getScore()
        );

        $this->assertEquals(
            0, $Frame->ball(0)->getScore()
        );
    }

    public function test_5_and_4_return_9 ( )
    {
        $Frame = new Frame;

        $this->assertEquals(
            5, $Frame->ball(5)->getScore()
        );

        $this->assertEquals(
            9,
                $Frame->ball(4)->getScore()
        );
    }

    public function test_spare_returns_empty(){

    }

    #this test represents a test of number of
    #balls remaining from a new frame
    public function test_balls_remaining(){
        $Frame = new Frame;

        $this->assertEquals(
        2, $Frame->getBallsRemaining());


    }
}
