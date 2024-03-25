<?php

namespace Hostingde\API\classes\webhosting;

use Hostingde\API\classes\GenericObject;

class CronJob extends GenericObject {
	public $comment;
	public $type;
	public $script;
	public $url;
	public $schedule;
	public $daypart;
	public $weekday;
	public $dayOfMonth;
}
