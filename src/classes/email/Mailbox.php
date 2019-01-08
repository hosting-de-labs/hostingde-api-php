<?php

namespace Hostingde\API;

class Mailbox extends GenericObject {
	public $id;
	public $accountId;
	public $bundleId;
	public $addDate;
	public $autoResponder;
	public $deletionScheduledFor;
	public $domainName;
	public $domainNameUnicode;
	public $emailAddress;
	public $emailAddressUnicode;
	public $lastChangeDate;
	public $paidUntil;
	public $productCode;
	public $renewOn;
	public $restorableUntil;
	public $restrictions;
	public $spamFilter;
	public $status;
}
