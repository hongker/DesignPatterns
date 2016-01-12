<?php
namespace Prototype;

class ConcretePrototype implements IPrototype {
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function getName() : string {
		return $this->name;
	}

	public function copy() {
		/**
		 * simple copy
		 */
		//return clone $this;
		
		/**
		 * deep copy
		 */
		$serializeObj = serialize($this);
		$cloneObj = unserialize($serializeObj);

		return $cloneObj;
		
	}
}