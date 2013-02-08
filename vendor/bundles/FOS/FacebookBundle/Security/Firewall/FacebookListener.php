<?php

/*
 * This file is part of the FOSFacebookBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\FacebookBundle\Security\Firewall;
use FOS\FacebookBundle\Security\Authentication\Token\FacebookUserToken;
//use Symfony\Component\Security\Http\Firewall\AbstractAuthenticationListener;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;

/**
 * Facebook authentication listener.
 */
class FacebookListener implements ListenerInterface {

	protected $securityContext;
	protected $authenticationManager;
	
	public function __construct(SecurityContextInterface $securityContext, AuthenticationProviderInterface $authenticationManager)
	{
		$this->securityContext = $securityContext;
		$this->authenticationManager = $authenticationManager;
	}
	
	public function getPosition() {
		return 'pre_auth';
	}
	
	public function getKey() {
		return 'fos_facebook';
	}
	
	/*
	protected function attemptAuthentication(Request $request) {
		return $this->authenticationManager
				->authenticate(new FacebookUserToken($this->providerKey));
	}
	*/
	public function handle(GetResponseEvent $event) {
		// TODO: Auto-generated method stub
		try
		{	
			$authToken =  $this->authenticationManager
				->authenticate(new FacebookUserToken($this->getKey()));
			$this->securityContext->setToken($authToken);
			
		}
		catch (AuthenticationException $failed) 
		{
			// ... you might log something here
			$response = new Response();
			$response->setStatusCode(403);
			$event->setResponse($response);
		}
		catch (Exception $failed)
		{
		}
	}

}
