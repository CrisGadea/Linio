<?php

namespace Test;

use Src\ListNumbers;

use PHPUnit\Framework\TestCase;

class ListNumbersTest extends TestCase
{
	function testGenerateNumbers()
	{
		// Generate the instance 
		$instance = new ListNumbers();
		// Expected param
		$expected = $instance->generateNumbers();
		//Print in console the list of numbers
		$instance->printNumbers($expected);

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
		//Validate if expected array is equals to the actual array
		$this->assertEquals($expected,$actual);
	}
}