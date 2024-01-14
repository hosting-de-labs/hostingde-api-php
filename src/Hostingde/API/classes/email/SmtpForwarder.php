<?php

namespace Hostingde\API\classes\email;

class SmtpForwarder extends Mailbox {
	public $type = "SmtpForwarder";
	public $server;
	public $port;
}
