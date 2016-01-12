<?php
namespace Mediator;

abstract class AbstractMediator {
	/**
	 * [$purchase description]
	 * @var Mediator\Purchase
	 */
	protected $purchase;

	/**
	 * [$sale description]
	 * @var Mediator\Sale
	 */
	protected $sale;

	/**
	 * [$stock description]
	 * @var Mediator\Stock
	 */
	protected $stock;

	public function __construct() {
		$this->purchase = new Purchase($this);
		$this->sale = new Sale($this);
		$this->stock = new Stock($this);
	}

	public abstract function execute(string $str, $object=null);
}