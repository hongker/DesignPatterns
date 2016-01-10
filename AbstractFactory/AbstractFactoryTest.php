<?php
namespace AbstractFactory;

/**
 * Unit Test for AbstractFactory
 */
class AbstractFactoryTest extends \PHPUnit_Framework_TestCase {
	public function testMaleFactory() {
		$maleFactory = new MaleFactory();

		$human1 = $maleFactory->createYellowHuman();
		$this->assertEquals('yellow', $human1->getColor());
		$this->assertEquals('male', $human1->getSex());

		$human2 = $maleFactory->createWhiteHuman();
		$this->assertEquals('white', $human2->getColor());
		$this->assertEquals('male', $human2->getSex());
	}

	public function testFemaleFactory() {
		$femaleFactory = new FemaleFactory();

		$human1 = $femaleFactory->createYellowHuman();
		$this->assertEquals('yellow', $human1->getColor());
		$this->assertEquals('female', $human1->getSex());

		$human2 = $femaleFactory->createWhiteHuman();
		$this->assertEquals('white', $human2->getColor());
		$this->assertEquals('female', $human2->getSex());
	}
}