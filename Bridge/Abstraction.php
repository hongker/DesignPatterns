<?php
namespace Bridge;

abstract class Abstraction {
	private $implementor;

	public function __construct(Implementor $imp) {
		$this->implementor = $imp;
	}

	public function request() {
		$this->implementor->doSomething();
	}

	public function getImplementor() {
		return $this->implementor;
	}
}
