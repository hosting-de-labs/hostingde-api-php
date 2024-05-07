<?php

namespace Hostingde\API\classes\domain;

use Hostingde\API\classes\GenericObject;

class Contact extends GenericObject {
	public $accountId;
	public $id;
	public $handle;
	public $type;
	public $name;
	public $organization;
	public $street;
	public $postalCode;
	public $city;
	public $state;
	public $country;
	public $emailAddress;
	public $phoneNumber;
	public $faxNumber;
	public $sipUri;
	public $hidden;
	public $usableBySubAccount;
	public $addDate;
	public $lastChangeDate;
}
