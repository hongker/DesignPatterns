<?php
namespace AbstractFactory;

/**
 * Abstract Class 
 */
abstract class AbstractYellowHuman implements IHuman {
	private $color = 'yellow';

	public function getColor() : string {
		return $this->color;
	}

	public function talk() {
		echo "yellow human talk...\n";
	}

	public abstract function getSex();
}