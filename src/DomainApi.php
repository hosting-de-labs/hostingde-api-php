<?php

namespace Hostingde\API;

class DomainApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/domain/v1/json';

	public function contactsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('contactsFind', $data);
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

		$this->send('contactInfo', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Contact($this->getValue());
	}

	public function contactCreate($contact) {
		$data = array('authToken' => $this->authToken, 'contact' => $contact);

		$this->send('contactCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Contact($this->getValue());
	}

	public function contactUpdate($contact, $actingAs = 'designatedAgent') {
		$data = array('authToken' => $this->authToken, 'contact' => $contact, 'actingAs' => $actingAs);

		$this->send('contactUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Contact($this->getValue());
	}

	public function domainsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('domainsFind', $data);
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

		$this->send('domainInfo', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainStatus($domainNames) {
		$data = array('authToken' => $this->authToken, 'domainNames' => $domainNames);

		$this->send('domainStatus', $data);
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

		$this->send('domainCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainUpdate($domain, $actingAs = 'designatedAgent') {
		$data = array('authToken' => $this->authToken, 'domain' => $domain, 'actingAs' => $actingAs);

		$this->send('domainUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainDelete($domainName, $execDate = NULL) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'execDate' => $execDate);

		$this->send('domainDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainWithdraw($domainName, $disconnect = false, $execDate = NULL) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'disconnect' => $disconnect, 'execDate' => $execDate);

		$this->send('domainWithdraw', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainTransfer($domain, $transferData) {
		$data = array('authToken' => $this->authToken, 'domain' => $domain, 'transferData' => $transferData);

		$this->send('domainTransfer', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Domain($this->getValue());
	}

	public function domainTransferOutAck($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$this->send('domainTransferOutAck', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainTransferOutNack($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$this->send('domainTransferOutNack', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
	
	public function domainRestore($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$this->send('domainRestore', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainCreateAuthInfo2($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$this->send('domainCreateAuthInfo2', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainAttachToBundle($domainName, $bundleId) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'bundleId' => $bundleId);

		$this->send('domainAttachToBundle', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainChangeBundle($domainName, $bundleId) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'bundleId' => $bundleId);

		$this->send('domainChangeBundle', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function domainDetachFromBundle($domainName) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName);

		$this->send('domainDetachFromBundle', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}