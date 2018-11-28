<?php

namespace Hostingde\API;

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