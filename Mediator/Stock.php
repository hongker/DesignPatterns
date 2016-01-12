<?php
namespace Mediator;

class Stock extends AbstractColleague {
	private static $computer_number = 100;

	public function increase(int $number) {
		self::$computer_number += $number;
		echo "Computer number is : ".self::$computer_number."..\n";
	}

	public function decrease(int $number) {
		self::$computer_number -= $number;
		echo "Computer number is : {self::$computer_number}..\n";
	}

	public function getNumber() {
		return self::$computer_number;
	}

	public function clearStock() {
		echo "clear stock : {self::$computer_number}..\n";
		$this->mediator->execute('stock_clear');
	}
}