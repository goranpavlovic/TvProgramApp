<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
	public function loginAction()
	{
		return new RedirectResponse("/");
	}
	public function logoutAction()
	{
		return new Response("User successfully logged out");
	}

}








