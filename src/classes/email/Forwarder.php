<?php

namespace Hostingde\API;

class Forwarder extends Mailbox {
	public $type = "Forwarder";
	public $forwarderTargets;
	public $forwarderType;
}
