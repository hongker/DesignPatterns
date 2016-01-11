<?php
namespace Proxy;

class GamePlayerProxy implements IGamePlayer {
	private $player;

	public function __construct(IGamePlayer $player) {
		$this->player = $player;
	}

	public function login($password) {
		$this->player->login($password);
	}

	public function killBoss() {
		$this->player->killBoss();
	}

	public function upgrade() {
		$this->player->upgrade();
	}
}