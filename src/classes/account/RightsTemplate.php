<?php

namespace Hostingde\API;

class RightsTemplate extends GenericObject {
	public $id;
	public $accountId;
	public $name;
	public $comments;
	public $usableForSubaccounts;
	public $usableForApiKeys;
	public $usableForUsers;
	public $rights;
}