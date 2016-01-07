<?php
namespace SRP;
/**
 * User Business Object Interface
 */
interface IUserBO {
	public function setId(int $id);

	public function getId();

	public function setUsername(string $username);

	public function getUsername();

	public function setPassword(string $password);

	public function getPassword();

	
}