<?php
namespace Mediator;

abstract class AbstractColleague {
	protected $mediator;

	public function __construct(AbstractMediator $mediator) {
		$this->mediator = $mediator;
	}
}