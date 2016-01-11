<?php
namespace Builder;

class BmwModel extends CarModel {
	public function start() {
		echo "Bmw car start..\n";
	}

	public function stop() {
		echo "Bmw car stop..\n";
	}

	public function alarm() {
		echo "Bmw car alarm..\n";
	}

	public function engineBoom() {
		echo "Bmw car engineBoom..\n";
	}
}