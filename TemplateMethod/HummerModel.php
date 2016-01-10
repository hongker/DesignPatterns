<?php
namespace TemplateMethod;

abstract class HummerModel {
	/**
	 * start
	 * @return [type] [description]
	 */
	public abstract function start();

	/**
	 * stop
	 * @return [type] [description]
	 */
	public abstract function stop();

	/**
	 * [alarm description]
	 * @return [type] [description]
	 */
	public abstract function alarm();

	public abstract function engineBoom();

	public function run() {
		$this->start();

		$this->engineBoom();

		if($this->isAlarm()) 
			$this->alarm();

		$this->stop();
	}

	public function isAlarm() {
		return true;
	}
}