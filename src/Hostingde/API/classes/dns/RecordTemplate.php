<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class RecordTemplate extends GenericObject {
	public $id;
	public $templateId;
	public $name;
	public $type;
	public $content;
	public $ttl;
	public $priority;
}
