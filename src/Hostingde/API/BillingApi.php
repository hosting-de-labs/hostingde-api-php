<?php

namespace Hostingde\API;

use Hostingde\API\classes\billing\ArticlePurchasePrice;
use Hostingde\API\classes\billing\DomainPrice;
use Hostingde\API\classes\billing\RenewableObject;

class BillingApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/billing/v1/json';

	public function articlePurchasePricesFind($filter, $limit = 50, $page = 1, $ownerAccountId = NULL, $skipPagination = false) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'ownerAccountId' => $ownerAccountId, 'skipPagination' => $skipPagination);

		$this->send('articlePurchasePricesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}

		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $articlePurchasePrice) {
				$return[] = new ArticlePurchasePrice($articlePurchasePrice);
			}
			return $return;
		}
		return array();
	}

	public function renewableObjectsFind($filter, $limit = 50, $page = 1, $ownerAccountId = NULL, $skipPagination = false) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'ownerAccountId' => $ownerAccountId, 'skipPagination' => $skipPagination);

		$this->send('renewableObjectsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}

		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $renewableObject) {
				$return[] = new RenewableObject($renewableObject);
			}
			return $return;
		}
		return array();
	}

	public function priceListDomains($ownerAccountId = NULL) {
		$data = array('authToken' => $this->authToken, 'ownerAccountId' => $ownerAccountId);

		$this->send('priceListDomains', $data);
		if ($this->getStatus() == "error") {
			return false;
		}

		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $domainPrice) {
				$return[] = new DomainPrice($domainPrice);
			}
			return $return;
		}
		return array();
	}
}
