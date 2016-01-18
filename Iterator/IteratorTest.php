<?php
namespace Iterator;

class IteratorTest extends \PHPUnit_Framework_TestCase {
	public function testIterator() {
		$data1 = new \stdClass();
		$data1->name = 'hongker1';

		$data2 = new \stdClass();
		$data2->name = 'hongker2';
		$aggreate = new ConcreteAggregate();
		$aggreate->add($data1);
		$aggreate->add($data2);

		$iterator = $aggreate->iterator();

		while ($iterator->hasNext()) {
			$object = $iterator->next();
			echo "name : {$object->name}\n";
		}
	}

}