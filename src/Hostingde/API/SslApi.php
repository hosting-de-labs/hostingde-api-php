<?php

namespace Hostingde\API;

use Hostingde\API\classes\ssl\Certificate;
use Hostingde\API\classes\ssl\CertificateDetails;

class SslApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/ssl/v1/json";

	public function certificatesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('certificatesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $certificate) {
				$return[] = new Certificate($certificate);
			}
			return $return;
		}
		return array();
	}

	public function certificateGet($certificateId) {
		$data = array('authToken' => $this->authToken, 'certificateId' => $certificateId);

		$this->send('certificateGet', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Certificate($this->getValue());
	}

	public function certificateDetailsGet($certificateId) {
		$data = array('authToken' => $this->authToken, 'certificateId' => $certificateId);

		$this->send('certificateDetailsGet', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new CertificateDetails($this->getValue());
	}

	public function orderCreate($order) {
		$data = array('authToken' => $this->authToken, 'order' => $order);
		if (isset($order->accountId)) {
			$data['ownerAccountId'] = $order->accountId;
		}

		$this->send("orderCreate", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return $this->certificateDetailsGet($this->getValue()->certificateId);
	}

	public function orderContinue($certificateId) {
		$data = array('authToken' => $this->authToken, 'certificateId' => $certificateId);

		$this->send("orderContinue", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Certificate($this->getValue());
	}

	public function certificateRevoke($certificateId) {
		$data = array('authToken' => $this->authToken, 'certificateId' => $certificateId);

		$this->send("certificateRevoke", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function checkAutoValidationCapable($names, $ownerAccountId, $productCode) {
		$data = array('authToken' => $this->authToken, 'names' => $names, 'ownerAccountId' => $ownerAccountId, 'productCode' => $productCode);

		$this->send('checkAutoValidationCapable', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function certificatesMove($certificateIds, $toAccountId) {
		$data = array('authToken' => $this->authToken, 'certificateIds' => $certificateIds, 'toAccountId' => $toAccountId);

		$this->send('certificatesMove', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}
