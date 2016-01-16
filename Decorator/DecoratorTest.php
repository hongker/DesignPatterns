<?php
namespace Decorator;

class DecoratorTest extends \PHPUnit_Framework_TestCase {
	public function testDecorator() {
		$component = new ConcreteComponent();

		$decorator = new Decorator($component);

		$decorator->operate();
	}
}