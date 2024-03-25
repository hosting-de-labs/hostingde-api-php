<?php

namespace Hostingde\API;

use Hostingde\API\classes\webhosting\PhpIni;
use Hostingde\API\classes\webhosting\PhpIniValue;
use Hostingde\API\classes\webhosting\Redirection;
use Hostingde\API\classes\webhosting\User;
use Hostingde\API\classes\webhosting\Vhost;
use Hostingde\API\classes\webhosting\Webspace;

class WebhostingApi extends GenericApi {
	protected $location = "https://secure.hosting.de/api/webhosting/v1/json";

	public function vhostsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('vhostsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $vhost) {
				$return[] = new Vhost($vhost);
			}
			return $return;
		}
		return array();
	}

	public function webspacesFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('webspacesFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $webspace) {
				$return[] = new Webspace($webspace);
			}
			return $return;
		}
		return array();
	}

	public function redirectionsFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('redirectionsFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $redirection) {
				$return[] = new Redirection($redirection);
			}
			return $return;
		}
		return array();
	}

	public function webspaceCreate($webspace, $accesses, $poolId = NULL, $webserverId = NULL) {
		$data = array("authToken" => $this->authToken, "webspace" => $webspace, "accesses" => $accesses, "poolId" => $poolId, "webserverId" => $webserverId);

		$this->send("webspaceCreate", $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Webspace($this->getValue());
	}

	public function webspaceUpdate($webspace, $accesses) {
		$data = array('authToken' => $this->authToken, 'webspace' => $webspace, 'accesses' => $accesses);

		$this->send('webspaceUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Webspace($this->getValue());
	}

	public function vhostCreate($vhost, $phpIni, $setHttpUserPasswords = [], $sslPrivateKey = NULL) {
		$data = array('authToken' => $this->authToken, 'vhost' => $vhost, 'phpIni' => $phpIni, 'setHttpUserPasswords' => $setHttpUserPasswords, 'sslPrivateKey' => $sslPrivateKey);

		$this->send('vhostCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Vhost($this->getValue());
	}

	public function vhostUpdate($vhost, $phpIni = NULL, $setHttpUserPasswords = [], $sslPrivateKey = NULL) {
		$data = array('authToken' => $this->authToken, 'vhost' => $vhost, 'phpIni' => $phpIni, 'setHttpUserPasswords' => $setHttpUserPasswords, 'sslPrivateKey' => $sslPrivateKey);

		$this->send('vhostUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Vhost($this->getValue());
	}

	public function vhostPhpIniList($vhostId) {
		$data = array('authToken' => $this->authToken, 'vhostId' => $vhostId);

		$this->send('vhostPhpIniList', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		$phpIni = new PhpIni();
		$phpIni->vhostId = $vhostId;
		foreach($this->getValue()->values as $phpIniValue) {
			$phpIni->values[] = new PhpIniValue($phpIniValue);
		}
		return $phpIni;
	}

	public function redirectionCreate($redirection) {
		$data = array('authToken' => $this->authToken, 'redirection' => $redirection);

		$this->send('redirectionCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Redirection($this->getValue());
	}

	public function redirectionUpdate($redirection) {
		$data = array('authToken' => $this->authToken, 'redirection' => $redirection);

		$this->send('redirectionUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new Redirection($this->getValue());
	}

	public function redirectionDelete($domainName, $redirectionId = NULL) {
		$data = array('authToken' => $this->authToken, 'domainName' => $domainName, 'redirectionId' => $redirectionId);

		$this->send('redirectionDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function usersFind($filter, $limit = 50, $page = 1, $sort = NULL) {
		$data = array('authToken' => $this->authToken, 'filter' => $filter, 'limit' => $limit, 'page' => $page, 'sort' => $sort);

		$this->send('usersFind', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		if ($this->getValue()->totalEntries > 0) {
			$return = array();
			foreach($this->getValue()->data as $user) {
				$return[] = new User($user);
			}
			return $return;
		}
		return array();
	}

	public function userCreate($user, $password) {
		$data = array('authToken' => $this->authToken, 'user' => $user, 'password' => $password);

		$this->send('userCreate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new User($this->getValue());
	}

	public function userUpdate($user, $password) {
		$data = array('authToken' => $this->authToken, 'user' => $user, 'password' => $password);

		$this->send('userUpdate', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return new User($this->getValue());
	}

	public function userDelete($userId) {
		$data = array('authToken' => $this->authToken, 'userId' => $userId);

		$this->send('userDelete', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

	public function vhostAssociateManagedSsl($vhostId, $certificateId) {
		$data = array('authToken' => $this->authToken, 'vhostId' => $vhostId, 'certificateId' => $certificateId);

		$this->send('vhostAssociateManagedSsl', $data);
		if ($this->getStatus() == "error") {
			return false;
		}
		return true;
	}

    public function vhostActivateSsl ($vhostId, $sslSettings)
    {
        $data = array(
            'authToken' => $this->authToken,
            'vhost'     => [
                'id'          => $vhostId,
                'sslSettings' => $sslSettings
            ],
        );

        $this->send('vhostActivateSsl', $data);
        if($this->getStatus() == "error") {
            return false;
        }
        return new Vhost($this->getValue());
    }

    public function vhostDelete ($vhostId)
    {
        $data = array('authToken' => $this->authToken, 'vhostId' => $vhostId);

        $this->send('vhostDelete', $data);
        if($this->getStatus() == "error") {
            return false;
        }
        return true;
    }

    public function vhostPurgeRestorable ($vhostId)
    {
        $data = array('authToken' => $this->authToken, 'vhostId' => $vhostId);

        $this->send('vhostPurgeRestorable', $data);
        if($this->getStatus() == "error") {
            return false;
        }
        return true;
    }
}
