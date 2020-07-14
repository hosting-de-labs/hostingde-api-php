<?php

namespace Hostingde\API;

class AccountApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/account/v1/json';

	public function subaccountsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('subaccountsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $account) {
				$return[] = new Account($account);
			}
			return $return;
		}
		return array();
	}

	public function subaccountCreate($subaccount, $adminUser, $password) {
		$data = array('authToken' => $this->authToken, 'subaccount' => $subaccount, 'adminUser' => $adminUser, 'password' => $password);
		$this->send('subaccountCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Account($this->getValue());
	}

	public function usersFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('usersFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $user) {
				$return[] = new AccountUser($user);
			}
			return $return;
		}
		return array();
	}

	public function userUpdate($user) {
		$data = array('authToken' => $this->authToken, 'user' => $user);

		$this->send('userUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new User($this->getValue());
	}

	public function userChangeEmailAddress($userId, $emailAddress, $executingUserPassword) {
		$data = array('authToken' => $this->authToken, 'user' => $user, 'emailAddress' => $emailAddress, 'executingUserPassword' => $executingUserPassword);

		$this->send('userChangeEmailAddress', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function rightsTemplatesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('rightsTemplatesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $rightsTemplate) {
				$return[] = new RightsTemplate($rightsTemplate);
			}
			return $return;
		}
		return array();
	}

	public function rightsTemplateCreate($rightsTemplate) {
		$data = array('authToken' => $this->authToken, 'rightsTemplate' => $rightsTemplate);
		$this->send('rightsTemplateCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new RightsTemplate($this->getValue());
	}

	public function userRequestPasswordReset($emailAddress) {
		$data = array('emailAddress' => $emailAddress);
		$this->send('userRequestPasswordReset', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}