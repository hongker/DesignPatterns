<?php
namespace Responsibility;

class ConcreteHandler extends AbstractHandler {
	private $level = 1;
	
	protected function handle(Request $request) {
		echo "do something..\n";
		$result = new Response();
		return $result;
	}

	public function getHandleLevel() {
		return $this->level;
	}
}