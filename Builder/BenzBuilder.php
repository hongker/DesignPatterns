<?php
namespace Builder;

class BenzBuilder extends CarBuilder {
	private $benz;

	public function __construct() {
		$this->benz = new BenzModel();
	}

	public function getCarModel() : CarModel{
		return $this->benz;
	}

	public function setSequences(array $sequcences) {
		$this->benz->setSequences($sequcences);
	}
}