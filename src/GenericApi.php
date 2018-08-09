<?php

namespace Hostingde\API;

class GenericApi {
	protected $authToken;

	protected $lastRequestId = NULL;
	protected $lastResponse = NULL;

	protected $transactionId = NULL;

	function __construct($authToken) {
		$this->authToken = $authToken;
	}

	public function resetLocation($url)
	{
		$this->location = $url;
		$this->__construct($this->authToken);
	}

	protected function send($function, $data) {
		$json = json_encode($data);
		$ch = curl_init($this->location."/".$function);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($json))
		);

		$response = curl_exec($ch);
		$this->lastResponse = json_decode($response);
	}

	public function getStatus()
	{
		if (isset($this->lastResponse) && isset($this->lastResponse->status)) {
			return $this->lastResponse->status;
		}
		return false;
	}
	
	public function getErrors()
	{
		if (isset($this->lastResponse) && isset($this->lastResponse->errors)) {
			return $this->lastResponse->errors;
		}
		return array();
	}

	public function getErrorsToString()
	{
		$str = NULL;
		foreach($this->getErrors() as $error) {
			$str .= $error->code.": ".$error->text.";";
		}
		return $str;
	}


	public function getWarnings()
	{
		if (isset($this->lastResponse) && isset($this->lastResponse->warnings)) {
			return $this->lastResponse->warnings;
		}
		return array();
	}

	public function getValue()
	{
		if (isset($this->lastResponse) && isset($this->lastResponse->response)) {
			return $this->lastResponse->response;
		} elseif (isset($this->lastResponse) && isset($this->lastResponse->responses)) {
			return $this->lastResponse->responses;
		} elseif (isset($this->lastResponse) && isset($this->lastResponse->value)) {
			return $this->lastResponse->value;
		} elseif (isset($this->lastResponse) && isset($this->lastResponse->values)) {
			return $this->lastResponse->values;
		}
		return false;
	}
}