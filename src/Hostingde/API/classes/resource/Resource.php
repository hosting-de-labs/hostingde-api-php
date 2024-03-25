<?php

namespace Hostingde\API\classes\resource;

use Hostingde\API\classes\GenericObject;

class Resource extends GenericObject {
	public $id;
	public $accountId;
	public $poolId;
	public $resourceType;
	public $hostName;
	public $priority;
	public $ignore;
	public $addDate;
	public $lastChangeDate;
}
