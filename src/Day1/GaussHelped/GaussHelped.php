<?php

namespace Day1\GaussHelped;

class GaussHelped
{
    public function gaussSum($number)
    {
        $this->simpleNotNumCatch($number);
        if ($number == 0 or $number == 1) {
            return $number;
        } else {
            return ($number * ($number + 1) / 2);
        }
    }

    private function simpleNotNumCatch(int $num){
        if(!is_numeric($num) or $num < 0)
            throw new \InvalidArgumentException;
    }
}