<?php
namespace IIP;

class IIPTest extends \PHPUnit_Framework_TestCase {
	public function testSearcher() {
		$girl = new PettyGirl('Sufei');
		$searcher = new Searcher($girl);

		$searcher->show();
	}
}