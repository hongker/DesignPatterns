<?php
namespace Strategy;

class ConcreteStrategy implements IStrategy {
	public function doSomething() {
		echo "Strategy : do something..\n";
	}
}