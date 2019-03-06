<?php

namespace Hostingde\API;

class Filter extends GenericObject {
	public $subFilterConnective = 'AND';
	public $subFilter = array();

	public function __construct($object = NULL, $subfilter = true) {
		parent::__construct($object);
		if (!$subfilter) {
			unset($this->subFilterConnective);
			unset($this->subFilter);
		}
	}

	public function addFilter($field, $value, $relation = "equal") {
		if (isset($this->subFilter) && is_array($this->subFilter)) {
			$this->subFilter[] = array('field' => $field, 'value' => $value, 'relation' => $relation);
		} else {
			$this->field = $field;
			$this->value = $value;
			$this->relation = $relation;
		}
	}
}