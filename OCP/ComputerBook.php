<?php
namespace OCP;

/**
 * Class ComputerBook
 */
class ComputerBook implements IComputerBook{
	/**
	 * book name
	 * @var string
	 */
	private $name;

	/**
	 * book price
	 * @var float
	 */
	private $price;

	/**
	 * book author
	 * @var string
	 */
	private $author;

	/**
	 * book scope
	 * @var [type]
	 */
	private $scope;

	public function __construct(string $name, float $price, string $author,$scope) {
		$this->name = $name;
		$this->price = $price;
		$this->author = $author;
		$this->scope = $scope;
	}

	/**
	 * get name
	 * @return string
	 */
	public function getName() : string {
		return $this->name;
	}

	/**
	 * get price
	 * @return float
	 */
	public function getPrice() : float {
		return $this->price;
	}

	/**
	 * get author
	 * @return string
	 */
	public function getAuthor() : string {
		return $this->author;
	}

	/**
	 * get scope
	 * @return string
	 */
	public function getScope() : string {
		return $this->scope;
	}
}