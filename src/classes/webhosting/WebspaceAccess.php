<?php

namespace Hostingde\API;

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