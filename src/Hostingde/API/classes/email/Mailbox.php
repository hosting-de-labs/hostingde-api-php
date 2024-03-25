<?php

namespace Hostingde\API\classes\email;

use Hostingde\API\classes\GenericObject;

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

	public function _load() {
		$this->autoResponder = new AutoResponder();
		$this->spamFilter = new SpamFilter();
	}
}
