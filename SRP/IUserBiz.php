<?php
namespace SRP;
/**
 * User Business Logic Interface
 */
interface IUserBiz {
	public function changePass(IUserBO $userBO, string $newPass);

	public function deleteUser(IUserBO $userBO);

	public function mapUser(IUserBO $userBO);

	public function addOrg(IuserBO $userBO, int $orgId);

	public function addRole(IUserBO $userBO, int $roleId);


}