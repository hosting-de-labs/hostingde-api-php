<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class NameserverSet extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $defaultNameserverSet;
	public $nameservers = array();
}
