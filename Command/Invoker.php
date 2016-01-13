<?php
namespace Command;

class Invoker {
	private $command;

	public function __construct(AbstractCommand $command) {
		$this->command = $command;
	}

	public function action() {
		$this->command->execute();
	}
}