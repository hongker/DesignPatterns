<?php
namespace LOD;

/**
 * Class Teacher
 */
class Teacher {
	/**
	 * teacher name
	 * @var string
	 */
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	/**
	 * send commond to group leader
	 * @param  GroupLeader $groupLeader [description]
	 * @return [type]                   [description]
	 */
	public function commond(GroupLeader $groupLeader) {
		$groupLeader->countGirls();
	}

	/**
	 * get teacher name
	 * @return string
	 */
	public function getName() : string {
		return $this->name;
	}
}