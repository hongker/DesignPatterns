<?php
namespace Proxy;

/**
 * Unit Test for Proxy
 */
class ProxyTest extends \PHPUnit_Framework_TestCase {

	/**
	 * test player
	 * @return [type] [description]
	 */
	public function testPlayer() {
		$player = new GamePlayer('hongker');

		$player->login('xxxxx');
		$player->killBoss();
		$player->upgrade();

	}

	/**
	 * test proxy
	 * 
	 * @return [type]         [description]
	 */
	public function testProxy() {
		$player = new GamePlayer('hongker');
		$proxy = new GamePlayerProxy($player);

		$proxy->login('xxxxx');
		$proxy->killBoss();
		$proxy->upgrade();
	}
}