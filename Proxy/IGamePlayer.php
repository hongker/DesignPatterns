<?php
namespace Proxy;

/**
 * Interface IGamePlayer
 */
interface IGamePlayer {
	/**
	 * player login
	 * @param  [type] $password [description]
	 * @return [type]           [description]
	 */
	public function login($password);

	/**
	 * player kill boss
	 * @return [type] [description]
	 */
	public function killBoss();

	/**
	 * player upgrade
	 * @return [type] [description]
	 */
	public function upgrade();
}