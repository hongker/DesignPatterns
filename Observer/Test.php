<?php
namespace Observer;

class Test extends \PHPUnit_Framework_TestCase {
	public function testObserver() {
		$observer = new ConcreteObserver();

		$observer->update();
	}

	public function testSubject() {
		$subject = new ConcreteSubject();

		$subject->addObserver(new ConcreteObserver());

		$subject->doSomething();
	}
}