<?php

namespace Hostingde\API;

class CatchAll extends Mailbox {
	public $type = "CatchAll";
	public $forwarderTargets;
}
