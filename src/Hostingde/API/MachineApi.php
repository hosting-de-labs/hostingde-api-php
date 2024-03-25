<?php

namespace Hostingde\API;

use Hostingde\API\classes\machine\VirtualMachine;

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

	public function virtualMachinePowerOn($virtualMachineId) {
		$data = array('authToken' => $this->authToken, 'virtualMachineId' => $virtualMachineId);

		$this->send('virtualMachinePowerOn', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function virtualMachinePowerOff($virtualMachineId) {
		$data = array('authToken' => $this->authToken, 'virtualMachineId' => $virtualMachineId);

		$this->send('virtualMachinePowerOff', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function virtualMachineShutdown($virtualMachineId) {
		$data = array('authToken' => $this->authToken, 'virtualMachineId' => $virtualMachineId);

		$this->send('virtualMachineShutdown', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function virtualMachineReset($virtualMachineId) {
		$data = array('authToken' => $this->authToken, 'virtualMachineId' => $virtualMachineId);

		$this->send('virtualMachineReset', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function virtualMachineReboot($virtualMachineId) {
		$data = array('authToken' => $this->authToken, 'virtualMachineId' => $virtualMachineId);

		$this->send('virtualMachineReboot', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}
