<?php

namespace Hostingde\API;

class Job extends GenericObject {
	public $accountId;
	public $action;
	public $addDate;
	public $clientTransactionId;
	public $id;
	public $lastChangeDate;
	public $objectId;
	public $objectType;
	public $serverTransactionId;
	public $status;
	public $triggeredBy;

	public function _load() {
		$this->triggeredBy = new TriggeredBy();
	}
}