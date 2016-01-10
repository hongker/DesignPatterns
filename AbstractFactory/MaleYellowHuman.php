<?php
namespace AbstractFactory;

/**
 * Class MaleYellowHuman
 */
class MaleYellowHuman extends AbstractYellowHuman {
	private $sex = 'male';

	/**
	 * get sex
	 * @return [type] [description]
	 */
	public function getSex() : string {
		return $this->sex;
	}
}