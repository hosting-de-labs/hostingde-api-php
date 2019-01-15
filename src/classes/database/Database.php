<?php

namespace Hostingde\API;

class Database extends GenericObject {
	public $id;
	public $accountId;
	public $bundleId;
	public $dbEngine;
	public $dbName;
	public $dbType;
	public $forceSsl;
	public $hostName;
	public $limitations;
	public $poolId;
	public $renewOn;
	public $restrictions;
	public $productCode;
	public $storageQuota;
	public $storageUsed;
	public $storageQuotaUsedRatio;
	public $status;
	public $accesses = array();
	public $paidUntil;
	public $deletionScheduledFor;
	public $restorableUntil;
	public $addDate;
	public $lastChangeDate;
}