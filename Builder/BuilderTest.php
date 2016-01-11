<?php
namespace Builder;
/**
 * Builder Unit Test
 */
class BuilderTest extends \PHPUnit_Framework_TestCase {
	public function testBuilder() {
		$builder = new BenzBuilder();
		$sequences = array('start','engineBoom','stop');

		$builder->setSequences($sequences);
		$benz = $builder->getCarModel();
		$benz->run();

		$builder = new BmwBuilder();
		$builder->setSequences($sequences);
		$bmw = $builder->getCarModel();
		$bmw->run();
	}
}