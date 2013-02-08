<?php

namespace TvDatabase\LoginBundle\Security\Authentication\Token;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

class TvDatabaseToken extends AbstractToken
{
	public $created;
	public $digest;
	public $nonce;

	public function __construct(array $roles = array())
	{
		parent::__construct($roles);

		// If the user has roles, consider it authenticated
		$this->setAuthenticated(count($roles) > 0);
	}

	public function getCredentials()
	{
		return '';
	}
}