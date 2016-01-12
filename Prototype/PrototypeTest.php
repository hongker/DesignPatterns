<?php
namespace Prototype;

class PrototypeTest extends \PHPUnit_Framework_TestCase {
	public function testCopy() {
		$str = 'prototype';
		$object1 = new ConcretePrototype($str);
		$this->assertEquals($str, $object1->getName());

		$object2 = $object1->copy();
		$this->assertEquals($str, $object2->getName());

	}
}