<?php
namespace Strategy;

class Context {
	private $strategy = null;

	public function __construct(IStrategy $strategy) {
		$this->strategy = $strategy;
	}

	public function doAnything() {
		$this->strategy->doSomething();
	}
}