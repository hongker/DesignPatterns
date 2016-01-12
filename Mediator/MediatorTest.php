<?php
namespace Mediator;

class MediatorTest extends \PHPUnit_Framework_TestCase {
	public function testPurchase() {
		$mediator = new Mediator();

		$purchase = new Purchase($mediator);

		$purchase->buyIBMComputer(100);
	}
}