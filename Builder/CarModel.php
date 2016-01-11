<?php
namespace Builder;

/**
 * Abstract Class CarModel
 */
abstract class CarModel {
	private $sequences = array();

	public abstract function start();

	public abstract function stop();

	public abstract function engineBoom();

	public abstract function alarm();

	/**
	 * [run description]
	 * @return [type] [description]
	 */
	public function run() {
		foreach ($this->sequences as $value) {
			if($value=='start') 
				$this->start();
			elseif($value=='stop')
				$this->stop();
			elseif($value=='alarm') 
				$this->alarm();
			elseif($value=='engineBoom') 
				$this->engineBoom();
		}
	}

	/**
	 * [setSequences description]
	 * @param array $sequences [description]
	 */
	public final function setSequences(array $sequences) {
		$this->sequences = $sequences;
	}


}