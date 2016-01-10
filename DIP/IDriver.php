<?php
namespace DIP;

/**
 * Driver Interface 
 */
interface IDriver {
	/**
	 * [drive description]
	 * @param  ICar   $car [description]
	 * @return [type]      [description]
	 */
	public function drive(ICar $car);
}