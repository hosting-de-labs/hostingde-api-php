<?php

namespace Hostingde\API;

class Domain extends GenericObject {
	public $accountId;
	public $bundleId;
	public $id;
	public $name;
	public $nameUnicode;
	public $status;
	public $transferLockEnabled;
	public $authInfo;
	public $contacts = array();
	public $nameservers = array();
	public $createDate;
	public $currentContractPeriodEnd;
	public $nextContractPeriodStart;
	public $deletionType;
	public $deletionDate;
	public $addDate;
	public $lastChangeDate;

	public function addContact($type, $contactId) {
		foreach($this->contacts as $number => $contact) {
			if ($contact->type == $type) {
				unset($this->contacts[$number]);
			}
		}
		$object = new \stdClass();
		$object->type = $type;
		$object->contact = $contactId;
		$this->contacts = array_merge($this->contacts, array($object));
	}

	public function addNameserver($nameserver, $ips = NULL) {
		if (is_array($ips)) {
			$this->nameservers[] = array('name' => $nameserver, 'ips' => $ips);
		} else {
			$this->nameservers[] = array('name' => $nameserver);
		}
	}
}
