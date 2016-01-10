<?php
namespace OCP;

class OffNovelBook extends NovelBook {
	/**
	 * [getPrice description]
	 * @return [type] [description]
	 * @override NovelBook\getPrice()
	 */
	public function getPrice() : float {
		$oldPrice = parent::getPrice();

		if($oldPrice < 80) {
			$newPrice = $oldPrice * 90 / 100;
		}else if( 80 < $oldPrice && $oldPrice <= 300) {
			$newPrice = $oldPrice * 80 / 100;
		}else {
			$newPrice = $oldPrice * 50 / 100;
		}

		return $newPrice;
	}
}