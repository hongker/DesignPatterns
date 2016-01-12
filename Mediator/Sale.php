<?php
namespace Mediator;

class Sale extends AbstractColleague {
	public function sellIBMComputer(int $number) {
		$this->mediator->execure('sale_sell', $number);
		echo "sell $number computer..\n";
	}

	public function getSaleStatus() {
		$rand = rand(0,100);
		echo "Sale status: $rand..\n";
		return $rand;
	}

	public function offSale() {
		$this->mediator->execute('sale_offSell');
	}
}