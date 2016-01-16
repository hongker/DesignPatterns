<?php
namespace Adapter;

class AdapterTest extends \PHPUnit_Framework_TestCase {
	public function testAdapter() {
		$adapter = new Adapter();

		$adapter->request();
	}
}