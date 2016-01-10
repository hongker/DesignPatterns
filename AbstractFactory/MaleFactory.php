<?php
namespace AbstractFactory;

class MaleFactory implements IHumanFactory {
	public function createYellowHuman() : MaleYellowHuman {
		return new MaleYellowHuman();
	}

	public function createWhiteHuman() : MaleWhiteHuman {
		return new MaleWhiteHuman();
	}
}