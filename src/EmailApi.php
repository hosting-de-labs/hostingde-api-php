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

	public function mailboxDeletePermanently($mailboxId) {
		$data = array("authToken" => $this->authToken, "mailboxId" => $mailboxId);

		$json = json_encode($data);

		$this->send("mailboxDeletePermanently", $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function mailboxPurgeRestorable($mailboxId) {
		$data = array("authToken" => $this->authToken, "mailboxId" => $mailboxId);

		$json = json_encode($data);

		$this->send("mailboxPurgeRestorable", $json);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}