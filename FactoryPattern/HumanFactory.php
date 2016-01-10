<?php
namespace FactoryPattern;

/**
 * Class Human Factory
 */
class HumanFactory extends AbstractHumanFactory {
	public function __construct() {

	}

	public function createHuman(string $class,string $name) : IHuman {
		try {
			$class = __NAMESPACE__.'\\'.$class;

			$human = new $class($name);

			return $human;
		} catch (\Exception $e) {
			echo "This kind of human not exists\n";
		}
	}
}