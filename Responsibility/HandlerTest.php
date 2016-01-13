<?php
namespace Responsibility;

class HandlerTest extends \PHPUnit_Framework_TestCase {
	public function testHandler() {
		$request = new Request(1);

		$handler1 = new ConcreteHandler();
		$handler2 = new ConcreteHandler2();

		$handler1->setNext($handler2);

		$response = $handler1->handleMessage($request);
	}
}