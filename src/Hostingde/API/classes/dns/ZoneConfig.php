<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class ZoneConfig extends GenericObject {
	public $id;
	public $accountId;
	public $status;
	public $name;
	public $nameUnicode;
	public $masterIp;
	public $type;
	public $emailAddress;
	public $zoneTransferWhitelist;
	public $lastChangeDate;
	public $soaValues;
	public $templateValues = NULL;
	public $dnsServerGroupId;
	public $dnsSecMode;

	public function _load() {
		$this->soaValues = new SOAValues();
	}
}
