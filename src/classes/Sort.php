<?php

namespace Hostingde\API;

class Sort extends GenericObject {
	public $field;
	public $order;

	public function __construct($field, $order = "DESC") {
		$this->field = $field;
		$this->order = $order;
	}
}
