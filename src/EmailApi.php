<?php

namespace Hostingde\API;

class EmailApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/email/v1/json";

	public function mailboxesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('mailboxesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $mailbox) {
				$className = "\\Hostingde\\API\\".$mailbox->type;
				$return[] = new $className($mailbox);
			}
			return $return;
		}
		return array();
	}

	public function mailboxCreate($mailbox) {
		$data = array('authToken' => $this->authToken, 'mailbox' => $mailbox);
		if (isset($mailbox->accountId)) {
			$data['ownerAccountId'] = $mailbox->accountId;
		}

		$this->send('mailboxCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		$className = "\\Hostingde\\API\\".$mailbox->type;
		return new $className($this->getValue());
	}

	public function mailboxUpdate($mailbox) {
		$data = array('authToken' => $this->authToken, 'mailbox' => $mailbox);

		$this->send('mailboxUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		$className = "\\Hostingde\\API\\".$mailbox->type;
		return new $className($this->getValue());
	}

	public function mailboxDelete($emailAddress, $execDate = NULL) {
		$data = array('authToken' => $this->authToken, 'emailAddress' => $emailAddress, 'execDate' => $execDate);

		$this->send('mailboxDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function mailboxRestore($mailboxId) {
		$data = array("authToken" => $this->authToken, "mailboxId" => $mailboxId);

		$this->send("mailboxRestore", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function mailboxPurgeRestorable($mailboxId) {
		$data = array("authToken" => $this->authToken, "mailboxId" => $mailboxId);

		$this->send("mailboxPurgeRestorable", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function organizationsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('organizationsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $organization) {
				$return[] = new Organization($organization);
			}
			return $return;
		}
		return array();
	}

	public function organizationCreate($organization) {
		$data = array('authToken' => $this->authToken, 'organization' => $organization);
		if (isset($mailbox->accountId)) {
			$data['ownerAccountId'] = $organization->accountId;
		}

		$this->send('organizationCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Organization($this->getValue());
	}

	public function organizationUpdate($organization) {
		$data = array('authToken' => $this->authToken, 'organization' => $organization);
		if (isset($mailbox->accountId)) {
			$data['ownerAccountId'] = $organization->accountId;
		}

		$this->send('organizationUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Organization($this->getValue());
	}

	public function organizationDelete($organizationId) {
		$data = array('authToken' => $this->authToken, 'organizationId' => $organizationId);

		$this->send('organizationDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}