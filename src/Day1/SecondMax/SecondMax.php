<?php

namespace Day1\SecondMax;

class SecondMax
{
	/**
     * @param array
     * @return int
     */
	public function findSecondMax($search_array)
	{
		$maximum = 0;
		$secmaximum = 0;

		foreach ($search_array as $value) {
			if ($value >= $maximum)
				$maximum = $value;
			if ($value >= $secmaximum)
				$secmaximum = $value;
		}
		unset($value);

		return $secmaximum;
	}
}