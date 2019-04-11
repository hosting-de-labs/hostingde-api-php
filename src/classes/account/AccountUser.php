<?php

namespace Hostingde\API;

class AccountUser extends GenericObject {
	public $id;
	public $accountId;
	public $adminUser;
	public $dateOfBirth;
	public $emailAddress;
	public $language;
	public $lastChangeDate;
	public $name;
	public $rightsTemplateId;
	public $twoFactorAuthStatus;
	public $addDate;
	public $rights = array();
}