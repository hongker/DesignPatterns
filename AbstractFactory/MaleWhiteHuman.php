<?php
namespace AbstractFactory;

/**
 * Class MaleWhiteHuman
 */
class MaleWhiteHuman extends AbstractWhiteHuman {
	private $sex = 'male';

	/**
	 * get sex
	 * @return [type] [description]
	 */
	public function getSex() :string{
		return $this->sex;
	}
}