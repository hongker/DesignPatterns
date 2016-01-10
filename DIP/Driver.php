<?php
namespace DIP;

/**
 * Driver Class
 */
class Driver implements IDriver {
	public function drive(ICar $car) {
		$car->run();
	}
}