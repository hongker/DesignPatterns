<?php
namespace Command;

abstract class AbstractCommand {
	protected $rg ;

	protected $cg;

	protected $pg;

	public function __construct() {
		$this->rg = new RequirementGroup();

		$this->cg = new CodeGroup();

		$this->pg = new PageGroup();
	}

	public abstract function execute();
}