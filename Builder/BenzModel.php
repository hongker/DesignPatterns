<?php
namespace Builder;

class BenzModel extends CarModel {
	public function start() {
		echo "Benz car start..\n";
	}

	public function stop() {
		echo "Benz car stop..\n";
	}

	public function alarm() {
		echo "Benz car alarm..\n";
	}

	public function engineBoom() {
		echo "Benz car engineBoom..\n";
	}
}