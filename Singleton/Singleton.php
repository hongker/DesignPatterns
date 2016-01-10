<?php
namespace Singleton;
/**
 * Singleton Patters Example
 */
class Singleton {
	private static $instance;

	private function __construct() {

	}

	/**
	 * [getInstance description]
	 * @return [type] [description]
	 */
	public static function getInstance() : Singleton{
		if(!(self::$instance instanceof self)) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	/**
	 * test for this class
	 * @return [type] [description]
	 */
	public function test() {
		return 'test';
	}
}