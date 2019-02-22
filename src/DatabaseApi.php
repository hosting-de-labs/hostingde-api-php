<?php

namespace Hostingde\API;

class DatabaseApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/database/v1/json";
	
	public function databasesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('databasesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $database) {
				$return[] = new Database($database);
			}
			return $return;
		}
		return array();
	}

	public function databaseCreate($database, $accesses) {
		$data = array("authToken" => $this->authToken, "database" => $database, "accesses" => $accesses);
		if (isset($database->accountId)) {
			$data['ownerAccountId'] = $database->accountId;
		}

		$this->send('databaseCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Database($this->getValue());
	}

	public function databaseUpdate($database, $accesses) {
		$data = array("authToken" => $this->authToken, "database" => $database, "accesses" => $accesses);

		$this->send('databaseUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Database($this->getValue());
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
				$return[] = new DatabaseUser($user);
			}
			return $return;
		}
		return array();
	}

	public function userCreate($user) {
		$data = array('authToken' => $this->authToken, 'user' => $user);
		if (isset($user->accountId)) {
			$data['ownerAccountId'] = $user->accountId;
		}

		$this->send('userCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new DatabaseUser($this->getValue());
	}

	public function userDelete($userId) {
		$data = array('authToken' => $this->authToken, 'userId' => $userId);
		
		$this->send('userDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}