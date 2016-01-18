<?php
namespace Composite;

class CompositeTest extends \PHPUnit_Framework_TestCase {
	public function testComposite() {
		$root = new Composite();
		$root->doSomething();

		$branch = new Composite();
		$leaf = new Leaf();
		$root->add($branch);
		$branch->add($leaf);

		$this->display($root);

	}

	public function display($root) {
		foreach ($root->getChildren() as $key => $object) {
			if($object instanceof Leaf) //叶子节点
				$object->doSomething();
			else
				$this->display($object);
		}
	}
}