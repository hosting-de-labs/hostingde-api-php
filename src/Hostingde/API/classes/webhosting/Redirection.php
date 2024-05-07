<?php

namespace Hostingde\API\classes\webhosting;

use Hostingde\API\classes\GenericObject;

class Redirection extends GenericObject {
	public $id;
	public $accountId;
	public $domainName;
	public $domainNameUnicode;
	public $metaTags;
	public $redirectionUrl;
	public $title;
	public $type;
	public $status;
	public $paidUntil;
	public $restorableUntil;
	public $addDate;
	public $lastChangeDate;
}
