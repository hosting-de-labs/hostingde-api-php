<?php

namespace Hostingde\API\classes\email;

class CatchAll extends Mailbox {
	public $type = "CatchAll";
	public $forwarderTarget;
}
