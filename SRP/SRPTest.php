<?php
namespace SRP;

/**
 * PHP Unit Test
 */
class SRPTest extends \PHPUnit_Framework_TestCase {
	/**
	 * test User Business Object
	 * @return [type] [description]
	 */
	public function testUserBo() {
		$userBo = new UserBO();

		$id = 1;
		$userBo->setId($id);

		$this->assertEquals($id, $userBo->getId());
	}

	/**
	 * test User Business Logic
	 * @return [type] [description]
	 */
	public function testUserBiz() {
		$userBo = new UserBO();
		$userBo->setId(1);
		$userBo->setUsername('hongker');
		$userBo->setPassword('my pass');

		$userBiz = new UserBiz();

		$newPass = 'new pass';
		$this->assertTrue($userBiz->changePass($userBo, $newPass));

		$this->assertEquals($newPass, $userBo->getPassword());
	}
}