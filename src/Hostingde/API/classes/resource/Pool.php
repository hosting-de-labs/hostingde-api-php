<?php

namespace Hostingde\API\classes\resource;

use Hostingde\API\classes\GenericObject;

class Pool extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $defaultPool;
	public $availableResources = array();
	public $exchangeMailboxesLimit;
	public $exchangeMailboxesAllocated;
	public $imapMailboxesLimit;
	public $imapMailboxesAllocated;
	public $forwarderMailboxesLimit;
	public $forwarderMailboxesAllocated;
	public $addDate;
	public $lastChangeDate;
}
