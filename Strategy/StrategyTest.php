<?php
namespace Strategy;

class Strategy extends \PHPUnit_Framework_TestCase {
	public function testStrategy() {
		$strategy = new ConcreteStrategy();

		$context = new Context($strategy);

		$context->doAnything();
	}
}