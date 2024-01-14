<?php

namespace Hostingde\API\classes\webhosting;

use Hostingde\API\classes\GenericObject;

class WebspaceAccess extends GenericObject {
	public $webspaceId;
	public $userId;
	public $userName;
	public $ftpAccess;
	public $sshAccess;
	public $statsAccess;
	public $addDate;
	public $lastChangeDate;
}
