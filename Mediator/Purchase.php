<?php
namespace Mediator;

class Purchase extends AbstractColleague {

	public function buyIBMComputer(int $number) {
		$this->mediator->execute('purchase_buy', $number);
	}

	public function refuseBuyIBM() {
		echo "refuse buy ibm computer..\n";
	}
}