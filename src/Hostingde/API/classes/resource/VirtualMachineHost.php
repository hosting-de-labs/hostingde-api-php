<?php

namespace Hostingde\API\classes\resource;

use Hostingde\API\classes\GenericObject;

class VirtualMachineHost extends GenericObject {
	public $id;
	public $accountId;
	public $hostName;
	public $ignore;
	public $physicalMachineId;
	public $poolId;
	public $priority;
	public $resourceType;
	public $type;
	public $addDate;
	public $lastChangeDate;
}
