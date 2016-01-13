<?php
namespace Responsibility;

class ConcreteHandler2 extends AbstractHandler {
	private $level = 2;
	
	protected function handle(Request $request) {
		echo "do something..\n";
		$result = new Response();
		return $result;
	}

	public function getHandleLevel() {
		return $this->level;
	}
}