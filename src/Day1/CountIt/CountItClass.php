<?php

namespace Day1\CountIt;


class CountItClass
{
    public function countIt($number,$stream){
        $this->numberOnlyCatcher($number,$stream);
        return substr_count($stream,$number);
    }

    private function numberOnlyCatcher($number, $stream){
        if(!is_numeric($number) or !is_numeric($stream))
            throw new \InvalidArgumentException;
    }
}