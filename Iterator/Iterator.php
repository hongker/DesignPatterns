<?php
namespace Iterator;

interface Iterator {
	/**
	 * get next object
	 * @return function [description]
	 */
	public function next();

	/**
	 * [hasNext description]
	 * @return boolean [description]
	 */
	public function hasNext();

	/**
	 * [remove description]
	 * @return [type] [description]
	 */
	public function remove();
}