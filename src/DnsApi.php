<?php

namespace Hostingde\API;

class DnsApi extends GenericApi {
	protected $location = 'https://secure.hosting.de/api/dns/v1/json';

	public function zonesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('zonesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $zone) {
				$return[] = new Zone($zone);
			}
			return $return;
		}
		return array();
	}

	public function zoneConfigsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('zoneConfigsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $zoneConfig) {
				$return[] = new ZoneConfig($zoneConfig);
			}
			return $return;
		}
		return array();
	}

	public function recordsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('zoneConfigsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $record) {
				$return[] = new Record($record);
			}
			return $return;
		}
		return array();
	}

	public function zoneCreate($zoneConfig, $records, $nameserverSetId = 0, $useDefaultNameserverSet = false) {
		$data = array('authToken' => $this->authToken, 'zoneConfig' => $zoneConfig, 'records' => $records, 'nameserverSetId' => $nameserverSetId, 'useDefaultNameserverSet' => $useDefaultNameserverSet);
		if (isset($zoneConfig->accountId)) {
			$data['ownerAccountId'] = $zoneConfig->accountId;
		}

		$this->send('zoneCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Zone($this->getValue());
	}

	public function zoneRecreate($zoneConfig, $records, $nameserverSetId = 0, $useDefaultNameserverSet = false) {
		$data = array('authToken' => $this->authToken, 'zoneConfig' => $zoneConfig, 'records' => $records, 'nameserverSetId' => $nameserverSetId, 'useDefaultNameserverSet' => $useDefaultNameserverSet);

		$this->send('zoneRecreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Zone($this->getValue());
	}

	public function zoneUpdate($zoneConfig, $recordsToAdd, $recordsToDelete) {
		$data = array('authToken' => $this->authToken, 'zoneConfig' => $zoneConfig, 'recordsToAdd' => $recordsToAdd, 'recordsToDelete' => $recordsToDelete);

		$this->send('zoneUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Zone($this->getValue());
	}

	public function zoneDelete($zoneConfigId = NULL, $zoneName = NULL) {
		$data = array('authToken' => $this->authToken, 'zoneConfigId' => $zoneConfigId, 'zoneName' => $zoneName);

		$this->send('zoneUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function changeContent($recordType, $oldContent, $newContent, $includeTemplates = false, $includeSubAccounts = false) {
		$data = array('authToken' => $this->authToken, 'recordType' => $recordType, 'oldContent' => $oldContent, 'newContent' => $newContent, 'includeTemplates' => $includeTemplates, 'includeSubAccounts' => $includeSubAccounts);

		$this->send('changeContent', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function zonesUntieFromTemplates($zoneConfigIds, $zoneConfigNames) {
		$data = array('authToken' => $this->authToken, 'zoneConfigIds' => $zoneConfigIds, 'zoneConfigNames' => $zoneConfigNames);

		$this->send('zonesUntieFromTemplates', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function zonesTieToTemplates($zoneConfigIds, $zoneConfigNames) {
		$data = array('authToken' => $this->authToken, 'zoneConfigIds' => $zoneConfigIds, 'zoneConfigNames' => $zoneConfigNames);

		$this->send('zonesTieToTemplates', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function nameserverSetsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('nameserverSetsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $nameserverSet) {
				$return[] = new NameserverSet($nameserverSet);
			}
			return $return;
		}
		return array();
	}

	public function nameserverSetCreate($nameserverSet) {
		$data = array('authToken' => $this->authToken, 'nameserverSet' => $nameserverSet);
		if (isset($nameserverSet->accountId)) {
			$data['ownerAccountId'] = $nameserverSet->accountId;
		}

		$this->send('nameserverSetCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new NameserverSet($this->getValue());
	}

	public function nameserverSetUpdate($nameserverSet) {
		$data = array('authToken' => $this->authToken, 'nameserverSet' => $nameserverSet);

		$this->send('nameserverSetUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new NameserverSet($this->getValue());
	}

	public function nameserverSetDelete($nameserverSet) {
		$data = array('authToken' => $this->authToken, 'nameserverSet' => $nameserverSet);

		$this->send('nameserverSetDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function nameserverSetGetDefault() {
		$data = array('authToken' => $this->authToken);

		$this->send('nameserverSetGetDefault', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new NameserverSet($this->getValue());
	}

	public function templatesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('templatesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $template) {
				$return[] = new Template($template);
			}
			return $return;
		}
		return array();
	}

	public function recordTemplatesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('recordTemplatesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $recordTemplate) {
				$return[] = new RecordTemplate($recordTemplate);
			}
			return $return;
		}
		return array();
	}

	public function templateCreate($dnsTemplate, $recordTemplates) {
		$data = array('authToken' => $this->authToken, 'dnsTemplate' => $dnsTemplate, 'recordTemplates' => $recordTemplates);
		if (isset($dnsTemplate->accountId)) {
			$data['ownerAccountId'] = $dnsTemplate->accountId;
		}

		$this->send('templateCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Template($this->getValue());
	}

	public function templateRecreate($dnsTemplate, $recordTemplates, $replacements) {
		$data = array('authToken' => $this->authToken, 'dnsTemplate' => $dnsTemplate, 'recordTemplates' => $recordTemplates, 'replacements' => $replacements);

		$this->send('templateRecreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Template($this->getValue());
	}

	public function templateUpdate($dnsTemplate, $recordTemplatesToAdd, $recordTemplatesToDelete, $replacements) {
		$data = array('authToken' => $this->authToken, 'dnsTemplate' => $dnsTemplate, 'recordTemplatesToAdd' => $recordTemplatesToAdd, 'recordTemplatesToDelete' => $recordTemplatesToDelete, 'replacements' => $replacements);

		$this->send('templateUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Template($this->getValue());
	}

	public function templateDelete($templateId, $templatename) {
		$data = array('authToken' => $this->authToken, 'templateId' => $templateId, 'templatename' => $templatename);

		$this->send('templateDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}
}