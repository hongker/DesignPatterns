<?php
namespace FactoryPattern;

/**
 * Unit Test for HumanFactory
 */
class HumanFactoryTest extends \PHPUnit_Framework_TestCase {
	public function testFactory() {
		$factory = new HumanFactory();

		$name1 = 'xiaoming';
		
		$man1 = $factory->createHuman('WhiteHuman', $name1);

		$name2 = 'xiaoqiang';
		$man2 = $factory->createHuman('YellowHuman', $name2);

		$this->assertEquals($name1, $man1->getName());
		$this->assertEquals($name2, $man2->getName());


	}
}