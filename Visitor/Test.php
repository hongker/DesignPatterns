<?php
namespace Visitor;

class Test extends \PHPUnit_Framework_TestCase {
	public function testVisitor() {
		$visitor = new Visitor();

		$element = new ConcreteElement();
		$element->accept($visitor);
		
	}
}