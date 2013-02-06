<?php

namespace TvDatabase\LoginBundle\Controller;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use Symfony\Component\Security\Core\Encoder\EncoderFactory;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use TvDatabase\LoginBundle\Entity\User;

class SecurityController extends Controller
{
	public function loginAction()
	{
		$request = $this->getRequest();
		$session = $request->getSession();
		
		if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
		{
			$error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
		}
		else
		{
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}
		return $this->render(
				'TvDatabaseLoginBundle:Security:login.html.twig',
				array(
						// last username entered by the user
						'last_username' => $session->get(SecurityContext::LAST_USERNAME),
						'error'         => $error,
				)
				);
	}
	public function registerAction()
	{
		return $this->render('TvDatabaseLoginBundle:Security:register.html.twig');
	}
	public function createUserAction()
	{
		$request = $this->getRequest();
		$username = $request->get("_username");
		$password = $request->get("_password");
		$againpass = $request->get("_againpassword");
		$email = $request->get("_email");
		if($password === $againpass)
		{
			$user = new User();
			$user->setEmail($email);
			$user->setUsername($username);
			$user->setIsActive(true);
			$user->setSalt("ROLE_USER");
			
			$factory = $this->get('security.encoder_factory');
			$encoder = $factory->getEncoder($user);
			$password = $encoder->encodePassword($password, $user->getSalt());
			
			$user->setPassword($password);
			
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($user);
			$entityManager->flush();
			
			$token = new UsernamePasswordToken($user, $user->getPassword(), $user->getRoles());
			$security = $this->get("security.context");
			$security->setToken($token);
			
			//return new Response("User Created");
			return new RedirectResponse($this->generateUrl('/en'));
		}
		else 
		{
			return new Response("User not created");
		}
	}
}
