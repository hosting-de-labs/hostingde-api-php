<?php

namespace Hostingde\API;

class DomainApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/domain/v1/json';

	public function contactsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$json = json_encode($data);

		$this->send('contactsFind', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $contact) {
				$return[] = new Contact($contact);
			}
			return $return;
		}
		return array();
	}

	public function contactInfo($contactId) {
		$data = array('authToken' => $this->authToken, 'contactId' => $contactId);

		$json = json_encode($data);

		$this->send('contactInfo', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Contact($this->getValue());
	}

	public function contactCreate($contact) {
		$data = array('authToken' => $this->authToken, 'contact' => $contact);

		$json = json_encode($data);

		$this->send('contactCreate', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Contact($this->getValue());
	}

	public function contactUpdate($contact, $actingAs = 'designatedAgent') {
		$data = array('authToken' => $this->authToken, 'contact' => $contact, 'actingAs' => $actingAs);

		$json = json_encode($data);

		$this->send('contactUpdate', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Contact($this->getValue());
	}

	public function domainsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$json = json_encode($data);

		$this->send('domainsFind', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $domain) {
				$return[] = new Domain($domain);
			}
			return $return;
		}
		return array();
	}

	public function domainInfo($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$json = json_encode($data);

		$this->send('domainInfo', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainStatus($domainNames) {
		$data = array('authToken' => $this->authToken, 'domainNames' => $domainNames);

		$json = json_encode($data);

		$this->send('domainStatus', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		if (is_array($this->getValue())) {
			$return = array();
			foreach($this->getValue() as $status) {
				$return[] = new DomainStatus($status);
			}
			return $return;
		}
		return array();
	}

	public function domainCreate($domain) {
		$data = array('authToken' => $this->authToken, 'domain' => $domain);

		$json = json_encode($data);

		$this->send('domainCreate', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainUpdate($domain, $actingAs = 'designatedAgent') {
		$data = array('authToken' => $this->authToken, 'domain' => $domain, 'actingAs' => $actingAs);

		$json = json_encode($data);

		$this->send('domainUpdate', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainDelete($domainName, $execDate = NULL) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'execDate' => $execDate);

		$json = json_encode($data);

		$this->send('domainDelete', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainWithdraw($domainName, $disconnect = false, $execDate = NULL) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'disconnect' => $disconnect, 'execDate' => $execDate);

		$json = json_encode($data);

		$this->send('domainWithdraw', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainTransfer($domain, $transferData) {
		$data = array('authToken' => $this->authToken, 'domain' => $domain, 'transferData' => $transferData);

		$json = json_encode($data);

		$this->send('domainTransfer', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainTransferOutAck($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$json = json_encode($data);

		$this->send('domainTransferOutAck', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainTransferOutNack($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$json = json_encode($data);

		$this->send('domainTransferOutNack', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
	
	public function domainRestore($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$json = json_encode($data);

		$this->send('domainRestore', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainCreateAuthInfo2($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$json = json_encode($data);

		$this->send('domainCreateAuthInfo2', $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}