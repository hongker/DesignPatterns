<?php
namespace Iterator;

interface Aggregate {
	/**
	 * add item
	 */
	public function add($object);

	/**
	 * remove item
	 * @return [type] [description]
	 */
	public function remove($object);

	/**
	 * [iterator description]
	 * @return [type] [description]
	 */
	public function iterator();
}