<?php

namespace Hostingde\API\classes\webhosting;

use Hostingde\API\classes\GenericObject;

class SslSettings extends GenericObject {
	public $certAdditionalInfo;
	public $certificates;
	public $hstsActivated;
	public $hstsAllowPreload;
	public $hstsIncludeSubdomains;
	public $hstsMaxAge;
	public $managedSslProductCode;
	public $profile;
}
