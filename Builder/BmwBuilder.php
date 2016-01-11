<?php
namespace Builder;

class BmwBuilder extends CarBuilder {
	private $bmw;

	public function __construct() {
		$this->bmw = new BmwModel();
	}

	public function getCarModel() : CarModel{
		return $this->bmw;
	}

	public function setSequences(array $sequcences) {
		$this->bmw->setSequences($sequcences);
	}
}