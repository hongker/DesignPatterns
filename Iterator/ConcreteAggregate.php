<?php
namespace Iterator;

class ConcreteAggregate implements Aggregate {
	private $aggregate;

	public function add($object) {
		$this->aggregate[] = $object;
	}

	public function iterator() {
		return new ConcreteIterator($this->aggregate);
	}

	public function remove($object) {
		foreach ($this->aggregate as $key => $value) {
			if($object==$value)
				unset($this->aggregate[$key]);
		}
	}
}