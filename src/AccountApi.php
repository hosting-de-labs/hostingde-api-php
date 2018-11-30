<?php

namespace Hostingde\API;

class AccountApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/account/v1/json';

	public function subaccountsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('subaccountsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $account) {
				$return[] = new Account($account);
			}
			return $return;
		}
		return array();
	}
}