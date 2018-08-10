<?php

namespace Hostingde\API;

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
	public $templateValues;
}