<?php
namespace Command;

class AddRequirementCommand extends AbstractCommand {
	public function execute() {
		$this->rg->find();

		$this->rg->add();

		$this->rg->plan();
	}
}