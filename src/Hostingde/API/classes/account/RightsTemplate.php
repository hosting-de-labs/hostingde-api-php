<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class RightsTemplate extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $comments;
	public $usableByCurrentAccount;
	public $usableForSubaccounts;
	public $usableForUsers;
	public $rights;
}
