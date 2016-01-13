<?php
namespace Command;

class RequirementGroup extends AbstractGroup {
	public function find() {
		echo "find requirement group...\n";
	}

	public function add() {
		echo "add one requirement...\n";
	}

	public function delete() {
		echo "delete one requirement...\n";
	}

	public function change() {
		echo "change one requirement...\n";
	}

	public function plan() {
		echo "provide a plan...\n";
	}

	
}