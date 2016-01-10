<?php
namespace IIP;

class PettyGirl implements IGreatTemperamentGirl, IGoodBodyGirl {
	/**
	 * girl name
	 * @var string
	 */
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	/**
	 * petty girl has great temperament
	 * @return [type] [description]
	 */
	public function greatTemperament() {
		echo "{$this->name} has great temperament\n";
	}

	/**
	 * petty girl has good looking
	 * @return [type] [description]
	 */
	public function goodLooking() {
		echo "{$this->name} has good looking\n";
	}

	/**
	 * petty girl has nice figure
	 * @return [type] [description]
	 */
	public function niceFigure() {
		echo "{$this->name} has nice figure\n";
	}
}