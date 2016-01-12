<?php
namespace Mediator;

class Mediator extends AbstractMediator {
	public function execute(string $str, $object=null) {
		if($str=='purchase_buy') { //buy computer
			$this->buyComputer($object);
		}elseif($str=='sale_sell') {

		}
	}

	private function buyComputer(int $number) {
		$saleStatus = $this->sale->getSaleStatus();

		if($saleStatus>80) {
			//good status, need more computers
			$this->stock->increase($number);
		}else {
			$number = $number/2;
			echo "buy ibm computer : $number..\n";
		}
	}
}