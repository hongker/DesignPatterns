<?php
namespace FactoryPattern;

/**
 * Class White Human
 */
class WhiteHuman implements IHuman {
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function getColor() : string {
		return 'white';
	}

	public function getName() : string {
		return $this->name;
	}

	public function talk() {
		echo "White Human :{$this->name} talking...\n";
	}
}