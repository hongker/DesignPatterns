<?php
namespace Proxy;

class GamePlayer implements IGamePlayer {
	/**
	 * player name
	 * @var [type]
	 */
	private $username;

	public function __construct(string $name) {
		$this->username = $name;
	}

	public function login($password) {
		echo "Login info: username : {$this->username}, password : $password \n";
	}

	public function killBoss() {
		echo "{$this->username} kill boss..\n";
	}

	public function upgrade() {
		echo "{$this->username} upgrade..\n";
	}
}