<?php
namespace DIP;
/**
 * DIP Unit Test
 */
class DIPTest extends \PHPUnit_Framework_TestCase {
	public function testDriver() {
		$dirver = new Driver();
		$dirver->drive(new Bmw());
	}
}