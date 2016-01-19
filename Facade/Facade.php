<?php
namespace Facade;

class Facade {
	private $one;
	private $two;

	public function __construct() {
		$this->one = new ClassOne();
		$this->two = new ClassTwo();
	}

	public function methodOne() {
		$this->one->doOne();
	}

	public function methodTwo() {
		$this->two->doTwo();
	}

}