<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

class CatalogueController extends Controller
{
	public function catalogueAction()
	{
		$em = $this->getDoctrine()->getManager();
		$catalogue = $em->getRepository('AcmeStoreBundle:MetaEAVEntityType');
		$query = $em->createQuery('SELECT e FROM AcmeStoreBundle:MetaEAVEntityType as e');
		
		$results = $query->getResult();
		
		$locale = $this->GetRequest()->getLocale();
		return $this->render('TvDatabaseHomeBundle:Default:catalogue.html.twig', 
				array(	'_locale' => $locale,
						'results' => $results
						));
	}
}