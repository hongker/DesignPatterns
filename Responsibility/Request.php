<?php
namespace Responsibility;

class Request {
	protected $level;

	public function __construct($level) {
		$this->level = $level;
	}

	public function getRequestLevel() {
		return $this->level;
	}
}