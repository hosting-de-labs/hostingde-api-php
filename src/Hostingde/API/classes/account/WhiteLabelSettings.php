<?php

namespace Hostingde\API\classes\account;

use Hostingde\API\classes\GenericObject;

class WhiteLabelSettings extends GenericObject {
	public $confirmationUrl;
	public $domainRegistrationTermsUrl;
	public $fromEmailAddress = "";
	public $fromName = "";
	public $name;
	public $whiteLabelSettingsEnabled = false;
	public $type;
}
