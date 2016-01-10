<?php
namespace IIP;

/**
 * Abstract Class Searcher
 */
abstract class AbstraceSearcher {
	/**
	 * petty girl
	 * @var PettyGirl
	 */
	protected $pettyGirl;

	public function __construct(PettyGirl $girl) {
		$this->pettyGirl = $girl;
	}

	/**
	 * show girl info
	 * @return [type] [description]
	 */
	public abstract function show();
}