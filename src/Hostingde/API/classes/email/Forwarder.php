<?php

namespace Hostingde\API\classes\email;

class Forwarder extends Mailbox {
	public $type = "Forwarder";
	public $forwarderTargets;
	public $forwarderType;
}
