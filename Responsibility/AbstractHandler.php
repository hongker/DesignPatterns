<?php
namespace Responsibility;

abstract class AbstractHandler {
	private $nextHandler;

	/**
	 * handle message
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	public function handleMessage(Request $request) : Response{
		$response = null;
		if($this->getHandleLevel()==$request->getRequestLevel()) {
			$response = $this->handle($request);
		}else {
			if($this->nextHandler) {
				$response = $this->nextHandler->handle($request);
			}else {
				echo "there is no avaliable handler to hand this request\n";
			}
		}
		return $response;
	}

	/**
	 * set next handler
	 * @param [type] $handler [description]
	 */
	public function setNext($handler) {
		$this->nextHandler = $handler;
	}

	/**
	 * get handle level
	 * @return [type] [description]
	 */
	protected abstract function getHandleLevel();

	/**
	 * [handle description]
	 * @param  [type] $request [description]
	 * @return [type]          [description]
	 */
	protected abstract function handle(Request $request);

}