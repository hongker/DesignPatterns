<?php
namespace Builder;

/**
 * Abstract Class CarBuilder
 */
abstract class CarBuilder {
	public abstract function setSequences(array $sequences);

	public abstract function getCarModel();
}