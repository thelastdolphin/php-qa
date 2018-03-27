<?php

namespace Test\Day1;

use Day1\CountIt\CountItClass;
use PHPUnit\Framework\TestCase;

class CountItTest extends TestCase
{
    private $finder;

    public function setUp(){
        $this->finder = new CountItClass();
    }

    public function test_it_for_zero() {
        $this->assertEquals(0, $this->finder->countIt(5, 678923429931809));
    }

    public function test_it_for_exactly_one() {
        $this->assertEquals(1, $this->finder->countIt(2, 678963429931809));
    }

    public function test_it_for_four() {
        $this->assertEquals(4, $this->finder->countIt(9, 678923429931809));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_it_for_string(){ // почему проходит?
        $this->finder->countIt('d', 'asdfasdf');
    }

    public function test_it_for_nihil() {
        $this->assertEquals(0, $this->finder->countIt('', 4328101829304820));
    }

    public function test_it_for_nihil_stream() {
        $this->assertEquals(0, $this->finder->countIt(5, ''));
    }
}
