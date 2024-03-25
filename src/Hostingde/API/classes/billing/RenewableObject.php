<?php

namespace Hostingde\API\classes\billing;

use Hostingde\API\classes\GenericObject;

class RenewableObject extends GenericObject {
	public $accountId;
	public $productCode;
	public $service;
	public $objectType;
	public $objectId;
	public $objectNameAce;
	public $objectNameUnicode;
	public $contractStartedPIT;
	public $renewOn;
	public $paidUntil;
	public $individualRetailPrice;
	public $individualRetailCurrency;
	public $lastDeletionPITWithoutRenew;
	public $deletionRequestPIT;
	public $deletionScheduledFor;
	public $addDate;
	public $lastChangeDate;
}
