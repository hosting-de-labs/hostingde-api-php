<?php

namespace Hostingde\API;

class Filter extends GenericObject {
	public $subFilterConnective = 'AND';
	public $subFilter = array();

	public function addFilter($field, $value, $relation = "equal") {
		$this->subFilter[] = array('field' => $field, 'value' => $value, 'relation' => $relation);
	}
}