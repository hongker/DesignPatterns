<?php
namespace Command;

class PageGroup extends AbstractGroup {
	public function find() {
		echo "find page group...\n";
	}

	public function add() {
		echo "add one page...\n";
	}

	public function delete() {
		echo "delete one page...\n";
	}

	public function change() {
		echo "change one page...\n";
	}

	public function plan() {
		echo "provide a plan...\n";
	}

	
}