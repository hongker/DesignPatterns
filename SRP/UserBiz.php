<?php
namespace SRP;

/**
 * User Business Logic
 */
class UserBiz implements IUserBiz {
	/**
	 * change user pass
	 * @param  IUserBO $userBo  [description]
	 * @param  string  $newPass [description]
	 * @return [type]           [description]
	 */
	public function changePass(IUserBO $userBo, string $newPass) : bool {
		$userBo->setPassword($newPass);

		return true;
	}

}