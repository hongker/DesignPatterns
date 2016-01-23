<?php
namespace Bridge;

class Test extends \PHPUnit_Framework_TestCase {
	public function testPattern() {
		$implementor = new ConcreteImplementor();

		$abs = new RefineAbstraction($implementor);

		$abs->request();
	}
}