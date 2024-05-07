<?php

namespace Hostingde\API\classes\resource;

use Hostingde\API\classes\GenericObject;

class RipeAllocation extends GenericObject {
	public $id;
	public $networkAddress;
	public $networkBits;
	public $ipVersion;
	public $minIpAddress;
	public $maxIpAddress;
	public $comments;
	public $addDate;
}
