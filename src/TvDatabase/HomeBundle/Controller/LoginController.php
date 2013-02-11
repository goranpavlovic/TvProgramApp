<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Facebook\Facebook;
use Facebook\FacebookApiException;

use Acme\StoreBundle\Entity\User;

class LoginController extends Controller
{
	public function loginAction()
	{
		$appId = $this->container->getParameter('facebook_app_id');
		$secret = $this->container->getParameter('facebook_app_secret');
		$users = $this->getDoctrine()->getRepository('AcmeStoreBundle:User');
		$entityManager = $this->getDoctrine()->getEntityManager();
		
		try
		{
			$fb = new Facebook(array('appId' => $appId, 'secret' => $secret));
			$user = $fb->getUser();
			
			$user_profile = $fb->api('/me');
			$email = $user_profile['email'];
			$id = $user_profile['id'];
			$existUser = $users->find($id);
			
			if($existUser == null)
			{
				if($user != null)
				{
					
					$newUser = new User($id);
					$newUser->setEmail($email);
					$entityManager->persist($newUser);
					$entityManager->flush();
				}
			}
		}
		catch(FacebookApiException $e)
		{
			return $this->forward('TvDatabaseHomeBundle:Default:index');
		}
		catch (Exception $e)
		{
			return $this->forward('TvDatabaseHomeBundle:Default:index');
		}
		//return new RedirectResponse("/");
		return $this->forward('TvDatabaseHomeBundle:Default:index');
	}
	public function logoutAction()
	{
		return new Response("User successfully logged out");
	}

}








