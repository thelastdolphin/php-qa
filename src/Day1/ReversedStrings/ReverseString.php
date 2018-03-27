<?php

namespace Day1\ReversedStrings;


class ReverseString
{
    /**
     * @param string $word
     * @return string
     */
    function reverse(string $word) : string
    {
        return strrev($word);
    }

}