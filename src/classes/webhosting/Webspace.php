<?php

namespace Hostingde\API;

class Webspace extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $webspaceName;
	public $productCode;
	public $storageQuota;
	public $storageUsed;
	public $storageQuotaUsedRatio;
	public $status;
	public $accesses = array();
	public $serverIpv4;
	public $cronJobs = array();
	public $paidUntil;
	public $deletionScheduledFor;
	public $restorableUntil;
	public $addDate;
	public $lastChangeDate;
}