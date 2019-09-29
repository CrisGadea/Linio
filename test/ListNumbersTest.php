<?php

namespace Test;

use Src\ListNumbers;

use PHPUnit\Framework\TestCase;

class ListNumbersTest extends TestCase
{
	function testGenerateNumbers()
	{
		$instance = new ListNumbers();
		$expected = $instance->generateNumbers();

		$actual = [];
		$number = 1;
		for ($i = 0; $i < 100; $i++) { 
			switch ($number) {
				case $instance->isMultipleOf3And5($number):
					$actual[$i] = "Linianos";
					break;
				case $instance->isMultipleOf3($number):
					$actual[$i] = "Linio";
					break;
				case $instance->isMultipleOf5($number):
					$actual[$i] = "IT";
					break;
				default:
					$actual[$i] = $number;
					break;
			}
			$number++;
		}
		$this->assertEquals($expected,$actual);
	}
}