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

	public function webspaceUpdate($webspace, $accesses) {
		$data = array('authToken' => $this->authToken, 'webspace' => $webspace, 'accesses' => $accesses);

		$this->send('webspaceUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Webspace($this->getValue());
	}
}