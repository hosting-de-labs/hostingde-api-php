<?php

namespace Hostingde\API;

class ExchangeMailbox extends Mailbox {
	public $type = "ExchangeMailbox";
	public $exchangeGUID;
	public $firstName;
	public $lastName;
	public $organizationId;
	public $storageQuota;
	public $storageQuotaUsed;
}
