<?php

namespace Hostingde\API;

class Vhost extends GenericObject {
	public $id;
	public $accountId;
	public $webspaceId;
	public $domainName;
	public $domainNameUnicode;
	public $enableAlias;
	public $redirectToPrimaryName;
	public $enableSystemAlias;
	public $systemAlias;
	public $status;
	public $webRoot;
	public $profile;
	public $serverType;
	public $locations;
	public $sslSettings;
	public $phpVersion;
	public $addDate;
	public $httpUsers;
	public $lastChangeDate;
}