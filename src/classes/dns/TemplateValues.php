<?php

namespace Hostingde\API;

class TemplateValues extends GenericObject {
	public $templateId;
	public $templateName;
	public $tieToTemplate;
	public $templateReplacements;

	public function _load() {
		$this->templateReplacements = new TemplateReplacements();
	}
}