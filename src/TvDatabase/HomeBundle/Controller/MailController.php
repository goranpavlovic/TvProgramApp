<?php

namespace TvDatabase\HomeBundle\Controller;

use Acme\StoreBundle\Entity\EAVAttributeValue;

use Acme\StoreBundle\AcmeStoreBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class MailController extends Controller
{
	public function mailAction()
	{
		$message = \Swift_Message::newInstance()
				->setSubject("Greetings!")
				->setFrom("admin@symfonyserver.com")
				->setTo("nikola.misic@elfak.rs")
				->setBody($this->renderView('TvDatabaseHomeBundle:Default:catalogue.html.twig',
						array(
								'_locale' => $locale,
								'results' => $results)));
		
		$this->get('mailer')->send($message);
		
		return $this->render('TvDatabaseHomeBundle:Default:catalogue.html.twig',
						array(
								'_locale' => $locale,
								'results' => $results));
	}
}