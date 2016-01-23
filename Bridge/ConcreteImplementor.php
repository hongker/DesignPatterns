<?php
namespace Bridge;

class ConcreteImplementor implements Implementor {
	public function doSomething() {
		echo "do something\n";
	}

	public function doAnything() {
		echo "do anything\n";
	}
}