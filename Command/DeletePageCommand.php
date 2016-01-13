<?php
namespace Command;

class DeletePageCommand extends AbstractCommand {
	public function execute() {
		$this->pg->find();

		$this->pg->delete();

		$this->pg->plan();
	}
}