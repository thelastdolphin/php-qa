<?php

namespace Tests\Day1;

use PHPUnit\Framework\TestCase;
use Day1\ReversedStrings\ReverseString;

class ReverseStringTest extends TestCase
{
    /** @var ReverseString */
    private $word;

    public function setUp() {
        $this->word = new ReverseString();
    }

    public function test_it_reversed_for_empty()
    {
        $this->assertEquals('', $this->word->reverse(''));
    }

    public function test_it_reversed_for_letter()
    {
        $this->assertEquals('a', $this->word->reverse('a'));
    }

    public function test_it_reversed_for_word()
    {
        $this->assertEquals('muzhik', $this->word->reverse('kihzum'));
    }

    public function test_it_reversed_for_string_with_spaces()
    {
        $this->assertEquals('She calls.', $this->word->reverse('.sllac ehS'));
    }

}
