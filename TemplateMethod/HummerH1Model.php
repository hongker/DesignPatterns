<?php
namespace TemplateMethod;

class HummerH1Model extends HummerModel {
	private $alarmFlag = true;

	public function start() {
		echo "Hummer H1 start...\n";
	}

	public function stop() {
		echo "Hummer H1 stop...\n";
	}

	public function alarm() {
		echo "Hummer H1 alarm...\n";
	}

	public function engineBoom() {
		echo "Hummer H1 engineBoom...\n";
	}

	public function setAlarm(bool $flag) {
		$this->alarmFlag = $flag;
	}

	public function isAlarm() : bool {
		return $this->alarmFlag;
	}
}