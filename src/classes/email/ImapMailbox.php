<?php

namespace Hostingde\API;

class ImapMailbox extends Mailbox {
	public $forwarderTargets;
	public $isAdmin;
	public $password;
	public $storageQuota;
	public $storageQuotaUsed;
}
