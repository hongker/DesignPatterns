<?php
namespace LSP;

/**
 * LSP Test Case
 */
class LSPTest extends \PHPUnit_Framework_TestCase {
	public function testSoldier() {
		$soldier = new Soldier(new Rifle());
		$soldier->killEnemy();
		$this->assertInstanceOf('LSP\AbstractGun', $soldier->getGun());

	}
}