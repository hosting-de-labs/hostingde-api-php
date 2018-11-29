<?php

namespace Hostingde\API;

class Bundle extends GenericObject {
	public $accountId;
	public $id;
	public $name;
	public $description;
	public $baseContingents = array();
	public $effectiveContingentUsage = array();
	public $purchasedContingentExtensions = array();
	public $productCode;
	public $nameservers = array();
	public $status;
	public $paidUntil;
	public $renewOn;
	public $deletionScheduledFor;
	public $restorableUntil;
	public $addDate;
	public $lastChangeDate;
	public $domainNameHandlingOnDeletion = array();
}