<?php
namespace LSP;

class Soldier {
	/**
	 * the soldier's gun
	 * @var [type]
	 */
	private $gun;

	public function __construct(AbstractGun $gun) {
		$this->gun = $gun;
	}

	public function killEnemy() {
		$this->gun->shoot();
	}

	/**
	 * get the soldier's gun
	 * @return [type] [description]
	 */
	public function getGun() : AbstractGun{
		return $this->gun;
	}
}