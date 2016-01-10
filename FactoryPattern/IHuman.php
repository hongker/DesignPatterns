<?php
namespace FactoryPattern;

/** 
 * Interface Human
 */
interface IHuman {
	/**
	 * human has color
	 * @return [type] [description]
	 */
	public function getColor();

	/**
	 * human can talk
	 * @return [type] [description]
	 */
	public function talk();
}