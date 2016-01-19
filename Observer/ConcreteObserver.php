<?php
namespace Observer;

class ConcreteObserver implements Observer{
	public function update() {
		echo "update..\n";
	}
}