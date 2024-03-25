<?php

namespace Hostingde\API\classes\machine;

use Hostingde\API\classes\GenericObject;

class VirtualMachineSpecification extends GenericObject {
	    public $architecture;
	    public $cpuNumber;
	    public $cpuPeriod;
	    public $cpuQuota;
	    public $memory;
	    public $networkBandwidth;
}
