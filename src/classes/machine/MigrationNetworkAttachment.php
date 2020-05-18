<?php

namespace Hostingde\API;

class NetworkAttachment extends GenericObject {
	public $networkId;
	public $addresses = array();
	public $mac;
}