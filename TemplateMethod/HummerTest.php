<?php
namespace TemplateMethod;

class HummerTest extends \PHPUnit_Framework_TestCase {

	public function testH1Model() {
		$model = new HummerH1Model();
		$model->setAlarm(false);
		$model->run();
	}

	public function testH2Model() {
		$model = new HummerH2Model();

		$model->run();
	}
}