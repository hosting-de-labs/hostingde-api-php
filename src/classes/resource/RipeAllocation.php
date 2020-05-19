<?php

namespace Hostingde\API;

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