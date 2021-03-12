<?php

namespace Hostingde\API;

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