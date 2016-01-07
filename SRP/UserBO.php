<?php
namespace SRP;

/**
 * User Business Object
 */
class UserBO implements IUserBO{
	/**
	 * user ID
	 * @var int
	 */
	private $id;

	/**
	 * user name
	 * @var string
	 */
	private $username;

	/**
	 * user pass
	 * @var string
	 */
	private $password;

	/**
	 * id setter
	 * @param int $id [description]
	 */
	public function setId(int $id) {
		$this->id = $id;
	}

	/**
	 * id getter
	 * @return [type] [description]
	 */
	public function getId() : int {
		return $this->id;
	}

	/**
	 * username setter
	 * @param string $username [description]
	 */
	public function setUsername(string $username) {
		$this->username = $username;
	}

	/**
	 * username getter
	 * @return [type] [description]
	 */
	public function getUsername() : string {
		return $this->username;
	}

	/**
	 * password setter
	 * @param string $password [description]
	 */
	public function setPassword(string $password) {
		$this->password = $password;
	}

	/**
	 * password getter
	 * @return [type] [description]
	 */
	public function getPassword() : string {
		return $this->password;
	}
}