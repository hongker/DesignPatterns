<?php
namespace Visitor;

class ConcreteElement extends Element {
	public function doSomething() {
		//code..
		echo "go die\n";
	}

	public function accept(IVisitor $visitor) {
		$visitor->visit($this);
	}
}