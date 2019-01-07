<?php

namespace Hostingde\API;

class ImapMailbox extends Mailbox {
	public $type = "ImapMailbox";
	public $forwarderTargets;
	public $isAdmin;
	public $password;
	public $storageQuota;
	public $storageQuotaUsed;
}
