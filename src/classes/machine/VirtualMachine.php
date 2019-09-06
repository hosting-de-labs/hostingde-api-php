<?php

namespace Hostingde\API;

class VirtualMachine extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $hostName;
	public $description;
	public $productCode;

	public $disks = array();
	public $diskControllerType;
	public $cpuNumber;
	public $blockedPorts = array();
	public $architecture;

	public $ipAddress;
	public $managementType;
	public $memory;

	public $networkInterfaces = array();

	public $osOptimization;
	public $power;
	public $rdns;
	public $rescue;
	public $status;
	public $timeZone;

	public $paidUntil;
	public $renewOn;
	public $deletionScheduledFor;
	public $restorableUntil;

	public $addDate;
	public $lastChangeDate;
}