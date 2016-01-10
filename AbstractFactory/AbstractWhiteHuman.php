<?php
namespace AbstractFactory;

/**
 * Abstract Class 
 */
abstract class AbstractWhiteHuman implements IHuman {
	private $color = 'white';

	public function getColor() :string {
		return $this->color;
	}

	public function talk() {
		echo "white human talk...\n";
	}

	public abstract function getSex();
}