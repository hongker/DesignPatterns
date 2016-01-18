<?php
namespace Composite;

class Composite extends Component {
	private $components;

	public function add(Component $component) {
		$this->components[] = $component;
	}

	public function remove(Component $component) {
		foreach ($this->components as $key => $value) {
			if($component==$value)
				unset($this->components[$key]);
		}
	}

	public function getChildren() {
		return $this->components;
	}
}