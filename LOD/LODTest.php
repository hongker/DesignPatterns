<?php
namespace LOD;

class LODTest extends \PHPUnit_Framework_TestCase {
	public function testTeacher() {
		$teacher = new Teacher("Teacher");

		$groupLeader = new GroupLeader("GroupLeader");

		$number = 10;
		for ($i=1; $i <= $number; $i++) { 
			$groupLeader->addGirl(new Girl("girl:$i"));
		}

		$teacher->commond($groupLeader);
	}
}