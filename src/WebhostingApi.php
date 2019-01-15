<?php

namespace Hostingde\API;

class WebhostingApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/webhosting/v1/json";
	
	public function vhostsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('vhostsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $vhost) {
				$return[] = new Vhost($vhost);
			}
			return $return;
		}
		return array();
	}

	public function webspacesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('webspacesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $webspace) {
				$return[] = new Webspace($webspace);
			}
			return $return;
		}
		return array();
	}

	public function webspaceCreate($webspace, $accesses, $webserverId) {
		$data = array("authToken" => $this->authToken, "webspace" => $webspace, "accesses" => $accesses, "webserverId" => $webserverId);
		if (isset($webspace->accountId)) {
			$data['ownerAccountId'] = $webspace->accountId;
		}

		$this->send("webspaceCreate", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Webspace($this->getValue());
	}

	public function webspaceUpdate($webspace, $accesses) {
		$data = array('authToken' => $this->authToken, 'webspace' => $webspace, 'accesses' => $accesses);

		$this->send('webspaceUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Webspace($this->getValue());
	}

	public function vhostUpdate($vhost, $phpIni) {
		$data = array('authToken' => $this->authToken, 'vhost' => $vhost, 'phpIni' => $phpIni);

		$this->send('vhostUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Vhost($this->getValue());
	}

	public function userCreate($user, $password) {
		$data = array('authToken' => $this->authToken, 'user' => $user, 'password' => $password);
		if (isset($user->accountId)) {
			$data['ownerAccountId'] = $user->accountId;
		}

		$this->send('userCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new User($this->getValue());
	}
}