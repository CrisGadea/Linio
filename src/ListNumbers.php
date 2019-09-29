<?php

namespace Src;

class ListNumbers
{

	private $limit;

	private $number;

	private $list_of_numbers;

	public function __construct()
	{
		$this->limit = 100;

		$this->number = 1;

		$this->list_of_numbers = [];
	}
	
	public function isMultipleOf3($number)
	{
		return $number % 3 === 0;
	}

	public function isMultipleOf5($number)
	{
		return $number % 5 === 0;
	}

	public function isMultipleOf3And5($number)
	{
		return $number % 3 === 0 && $number % 5 === 0;
	}

	public function generateNumbers()
	{
		$i = 0;
		for ($i = 0; $i < $this->limit; $i++) { 
			switch ($this->number) {
				case $this->isMultipleOf3And5($this->number):
					$this->list_of_numbers[$i] = "Linianos";
					break;
				case $this->isMultipleOf3($this->number):
					$this->list_of_numbers[$i] = "Linio";
					break;
				case $this->isMultipleOf5($this->number):
					$this->list_of_numbers[$i] = "IT";
					break;
				default:
					$this->list_of_numbers[$i] = $this->number;
					break;
			}
			$this->number++;
		}
		return $this->list_of_numbers;
	}
}