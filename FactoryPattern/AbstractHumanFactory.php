<?php
namespace FactoryPattern;

/**
 * Abstract Class Human Factory
 */
abstract class AbstractHumanFactory {
	/**
	 * [createHuman description]
	 * @return [type] [description]
	 */
	public abstract function createHuman(string $class, string $name);
}