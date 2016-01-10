<?php
namespace OCP;

/**
 * Class BookStore
 */
class BookStore {
	private $books;

	public function __construct() {

	}

	/**
	 * add book 
	 * @param IBook $book [description]
	 */
	public function addBook(IBook $book) {
		$this->books[] = $book;
	}

	/**
	 * show book lists
	 * @return [type] [description]
	 */
	public function show() {
		echo "The book lists : \n";
		foreach ($this->books as $book) {
			echo "Name : {$book->getName()} \t";
			echo "Author : {$book->getAuthor()}\t";
			echo "Price : {$book->getPrice()}\t";
			echo "\n";
		}
	}
}