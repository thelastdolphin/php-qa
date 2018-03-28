<?php

namespace Tests\Day1;

use Day1\SecondMax\SecondMax;
use PHPUnit\Framework\Testcase;

class SecondMaxTest extends Testcase
{
	private $arrayCheck;

	public function setUp(){
		$this->arrayCheck = new SecondMax();
	}

	public function testForIntArray(){
		$this->assertEquals(4, $this->arrayCheck->findSecondMax([3, 4, 2, 4, 5, 5]));
	}

	public function testForSameIntArray(){
		$this->assertEquals([], $this->arrayCheck->findSecondMax([1,1,1,1,1,1]));
	}
}