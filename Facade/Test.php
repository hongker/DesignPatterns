<?php
namespace Facade;

class Test extends \PHPUnit_Framework_TestCase {
	public function testFacade() {
		$facade = new Facade();

		$facade->methodOne();
		$facade->methodTwo();
	}
}