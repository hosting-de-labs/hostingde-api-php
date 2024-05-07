<?php

namespace Hostingde\API\classes\email;

use Hostingde\API\classes\GenericObject;

class AutoResponder extends GenericObject {
	public $active;
	public $body;
	public $enabled;
	public $end;
	public $start;
	public $subject;
}
