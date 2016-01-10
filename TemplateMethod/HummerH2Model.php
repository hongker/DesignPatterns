<?php
namespace TemplateMethod;

class HummerH2Model extends HummerModel {
	public function start() {
		echo "Hummer H2 start...\n";
	}

	public function stop() {
		echo "Hummer H2 stop...\n";
	}

	public function alarm() {
		echo "Hummer H2 alarm...\n";
	}

	public function engineBoom() {
		echo "Hummer H2 engineBoom...\n";
	}
}