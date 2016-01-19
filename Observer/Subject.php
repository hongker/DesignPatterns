<?php
namespace Observer;

abstract class Subject {
	private $observers;

	/**
	 * [addObserver description]
	 * @param Observer $observer [description]
	 */
	public function addObserver(Observer $observer) {
		$this->observers[] = $observer;
	}

	/**
	 * [delObserver description]
	 * @param  Observer $observer [description]
	 * @return [type]             [description]
	 */
	public function delObserver(Observer $observer) {
		foreach ($this->observers as $key => $value) {
			if($observer==$value)
				unset($this->observers[$key]);
		}
	}

	/**
	 * [notify description]
	 * @return [type] [description]
	 */
	public function notify() {
		foreach ($this->observers as $observer) {
			$observer->update();
		}
	}
}