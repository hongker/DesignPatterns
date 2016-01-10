<?php
namespace OCP;

/**
 * Class NovelBook
 */
class NovelBook implements IBook{
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

	public function __construct(string $name, float $price, string $author) {
		$this->name = $name;
		$this->price = $price;
		$this->author = $author;
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
}