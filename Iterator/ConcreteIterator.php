<?php
namespace Iterator;

class ConcreteIterator implements Iterator {
	private $aggregate;

	private $cursor = 0;

	public function __construct(array $aggregate) {
		$this->aggregate = $aggregate;
	}

	/**
	 * [hasNext description]
	 * @return boolean [description]
	 */
	public function hasNext() {
		if($this->cursor==count($this->aggregate))
			return false;
		return true;
	}

	/**
	 * [next description]
	 * @return function [description]
	 */
	public function next() {
		$result = null;
		if($this->hasNext())
			$result = $this->aggregate[$this->cursor++];

		return $result;
	}

	/**
	 * [remove description]
	 * @return [type] [description]
	 */
	public function remove() {
		unset($this->aggregate[$this->cursor]);
		return true;
	}
}