<?php

namespace tests\Day1;

use PHPUnit\Framework\TestCase;
use Day1\GaussHelped\GaussHelped;

class GaussHelpedTest extends TestCase
{
    /**@var $number*/
    private $tstnumber;

    public function setUp(){
        $this->tstnumber = new GaussHelped();
    }

    public function test_it_for_zero() {
        $this->assertEquals('0',$this->tstnumber->gaussSum(0));
    }

    public function test_it_for_one() {
        $this->assertEquals('1',$this->tstnumber->gaussSum(1));
    }

    public function test_it_for_twenty_five() {
        $this->assertEquals('325',$this->tstnumber->gaussSum(25));
    }

    public function test_it_for_big_num() {
        $this->assertEquals('1594176345',$this->tstnumber->gaussSum(56465));
    }


    /**
     * @expectedException = \InvalidArgumentException
     */
    public function test_it_for_string() {
        $this->tstnumber->gaussSum('d');
    }

    public function test_it_for_negative(){
        $this->tstnumber->gaussSum(-1);
    }
}
