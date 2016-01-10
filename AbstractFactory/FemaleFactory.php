<?php
namespace AbstractFactory;

class FemaleFactory implements IHumanFactory {
	public function createYellowHuman() : FemaleYellowHuman {
		return new FemaleYellowHuman();
	}

	public function createWhiteHuman() : FemaleWhiteHuman {
		return new FemaleWhiteHuman();
	}
}