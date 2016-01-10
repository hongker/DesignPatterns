<?php
namespace Singleton;

/**
 * Unit Test Class
 */
class SingletonTest extends \PHPUnit_Framework_TestCase {
	public function testInstance() {
		$instance = Singleton::getInstance();

		$this->assertEquals('test',$instance->test());
	}
}