<?php
namespace Visitor;

class Visitor implements IVisitor {
	public function visit($element) {
		$element->doSomething();
	}
}