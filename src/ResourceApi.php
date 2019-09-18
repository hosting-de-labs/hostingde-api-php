<?php

namespace Hostingde\API;

class ResourceApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/resource/v1/json';

	public function resourcesFind($poolId, $resourceType, $filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'poolId' => $poolId, 'resourceType' => $resourceTye, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('resourcesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $resource) {
				$return[] = new Resource($resource);
			}
			return $return;
		}
		return array();
	}

	public function poolsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('poolsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $pool) {
				$return[] = new Pool($pool);
			}
			return $return;
		}
		return array();
	}
}