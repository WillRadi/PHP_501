<?php 

namespace Mapper;

use Lib\TableGateway\TableGateway;
use Entity\Users;

class UsersMapper extends TableGateway
{
	protected $entity = 'Entity\Users';
	protected $table  = 'users';

	public function create(Users $user)
	{
		$userArray['name'] = $user->getName();
		$userArray['email'] = $user->getEmail();
		$userArray['pass'] = $user->getPass();
		$userArray['id'] = $user->getId();

		if (!$user->getId()) {
			$this->insert($userArray);
		} else {
			return 'ELSE <br>';
			$this->update($userArray, $userArray['id']);
		}
	}

	public function findOne(int $id)
	{
		return $this->find('*', "id={$id}");
	}
	// update(User) ->  update()
}