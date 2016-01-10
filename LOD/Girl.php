<?php
namespace LOD;

/**
 * Class Girl
 */
class Girl {
	/**
	 * girl name
	 * @var string
	 */
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	/**
	 * get girl name
	 * @return string
	 */
	public function getName() : string {
		return $this->name;
	}
}