<?php
namespace FactoryPattern;

/**
 * Class Yellow Human
 */
class YellowHuman implements IHuman {
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function getColor() : string {
		return 'yellow';
	}

	public function getName() : string {
		return $this->name;
	}

	

	public function talk() {
		echo "Yellow Human :{$this->name} talking...\n";
	}
}