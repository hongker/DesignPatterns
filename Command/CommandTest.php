<?php
namespace Command;

class CommandTest extends \PHPUnit_Framework_TestCase {
	public function testInvoker() {
		$command = new AddRequirementCommand();
		$invoker = new Invoker($command);

		$invoker->action();
	}
}