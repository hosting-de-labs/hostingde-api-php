<?php

namespace Hostingde\API;

class EmailApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/email/v1/json";

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