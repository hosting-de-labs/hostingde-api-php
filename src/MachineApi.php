<?php

namespace Hostingde\API;

class MachineApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/machine/v1/json";
	
	public function virtualMachinesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('virtualMachinesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $machine) {
				$return[] = new VirtualMachine($machine);
			}
			return $return;
		}
		return array();
	}
}