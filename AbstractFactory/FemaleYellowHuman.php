<?php
namespace AbstractFactory;

/**
 * Class FemaleYellowHuman
 */
class FemaleYellowHuman extends AbstractYellowHuman {
	private $sex = 'female';

	/**
	 * get sex
	 * @return [type] [description]
	 */
	public function getSex() :string {
		return $this->sex;
	}
}