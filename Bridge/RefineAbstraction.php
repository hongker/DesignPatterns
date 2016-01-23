<?php
namespace Bridge;

class RefineAbstraction extends Abstraction {
	public function request() {
		parent::request();
		$this->getImplementor()->doAnything();
	}
}