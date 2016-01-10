<?php
namespace AbstractFactory;

/**
 * Class FemaleWhiteHuman
 */
class FemaleWhiteHuman extends AbstractWhiteHuman {
	private $sex = 'female';

	/**
	 * get sex
	 * @return [type] [description]
	 */
	public function getSex() : string {
		return $this->sex;
	}
}