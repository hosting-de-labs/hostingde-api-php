<?php

namespace Hostingde\API\classes\billing;

use Hostingde\API\classes\GenericObject;

class ArticlePurchasePrice extends GenericObject {
	public $addGracePeriod;
	public $addGracePeriodQuantity;
	public $contractPeriod;
	public $currency;
	public $exchangeRatio;
	public $name;
	public $noticePeriod;
	public $platformId;
	public $price;
	public $productCode;
	public $promotionEndPIT;
	public $promotionStartPIT;
	public $promotionalPrice;
	public $service;
	public $startPIT;
	public $vatRate;
}
