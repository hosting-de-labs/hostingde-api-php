<?php

namespace Hostingde\API\classes\dns;

use Hostingde\API\classes\GenericObject;

class TemplateValues extends GenericObject {
	public $templateId;
	public $templateName;
	public $tieToTemplate;
	public $templateReplacements;

	public function _load() {
		$this->templateReplacements = new TemplateReplacements();
	}
}
