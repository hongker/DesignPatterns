<?php
namespace Decorator;

class Decorator extends AbstractComponent{
	private $component = null;

	public function __construct(AbstractComponent $component) {
		$this->component = $component;
	}

	public function operate() {
		$this->ready();
		$this->component->operate();
	}

	public function ready() {
		echo "Decorator ready..\n";
	}
}