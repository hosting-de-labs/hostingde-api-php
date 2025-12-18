<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class Restriction extends GenericObject {
	public $id;
	public $accountId;
	public $information;
	public $internalComment;
	public $type;
}
