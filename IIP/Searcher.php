<?php
namespace IIP;

/**
 * Class Searcher
 */
class Searcher extends AbstraceSearcher {
	public function show() {
		echo "The girl info : \n";

		$this->pettyGirl->goodLooking();

		$this->pettyGirl->greatTemperament();

		$this->pettyGirl->niceFigure();
	}
}