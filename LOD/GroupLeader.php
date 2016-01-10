<?php
namespace LOD;

/**
 * Class GroupLeader
 */
class GroupLeader {
	/**
	 * [$listGirls description]
	 * @var array
	 */
	private $listGirls;

	/**
	 * group leader name
	 * @var string
	 */
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	/**
	 * add girl to list
	 * @param Girl $girl [description]
	 */
	public function addGirl(Girl $girl) {
		$this->listGirls[$girl->getName()] = $girl;
	}

	/**
	 * count girls
	 * @return [type] [description]
	 */
	public function countGirls() {
		echo "Girl Count : {$this->getGirlsCount()}\n";
	}

	/**
	 * get count of girls
	 * @return [type] [description]
	 */
	public function getGirlsCount() {
		return count($this->listGirls);
	}

	/**
	 * get group leader name
	 * @return string
	 */
	public function getName() : string {
		return $this->name;
	}
}