<?php

namespace Hostingde\API;

class SmtpForwarder extends Mailbox {
	public $type = "SmtpForwarder";
	public $server;
	public $port;
}
