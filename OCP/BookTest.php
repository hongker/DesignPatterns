<?php
namespace OCP;

/**
 * Unit Test 
 */
class BookTest extends \PHPUnit_Framework_TestCase {
	public function testNovelBook() {
		$name = '追风筝的人';
		$price = 29.00;
		$author = 'Khaled Hosseini';

		$book = new NovelBook($name, $price, $author);

		$this->assertEquals($name, $book->getName());
		$this->assertEquals($price, $book->getPrice());
		$this->assertEquals($author, $book->getAuthor());
	}

	public function testOffNovelBook() {
		$name = '资本金融学';
		$price = 82.00;
		$author = '刘纪鹏';

		$book = new OffNovelBook($name, $price, $author);

		$this->assertEquals($name, $book->getName());
		$this->assertEquals($author, $book->getAuthor());
		$this->assertEquals($price * 0.8, $book->getPrice());
		
	}

	

	public function testBookStore() {
		$bookStore = new BookStore();

		$bookStore->addBook(new NovelBook('平凡的世界',58,'路遥'));

		$bookStore->show();
	}

}