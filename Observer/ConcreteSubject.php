<?php
namespace Observer;

class ConcreteSubject extends Subject{
	public function doSomething() {
		// code..
		
		$this->notify();
	}
}