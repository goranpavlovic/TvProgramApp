<?php

namespace TvDatabase\HomeBundle\Controller;

use Acme\StoreBundle\Entity\EAVAttributeValue;

use Acme\StoreBundle\AcmeStoreBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class SidebarController extends Controller
{
	public function showAction($EntityType)
	{
		$em = $this->getDoctrine()->getManager();
		
		$today = date_create(date('Y-m-d H:i:s'));
		
		$query = $em->createQuery('SELECT e, et, a FROM AcmeStoreBundle:EAVEntity e JOIN e.entityType et JOIN e.attributes a WHERE
									e.Datetime > :pre AND e.Datetime < :post 
									AND et.EntityTypeName = :type ORDER BY e.TvStation ASC, e.Datetime ASC')
							->setParameters(array(   'pre' => $today->format('Y-m-d') . ' 00-00-00',  
													'post' => $today->format('Y-m-d') . ' 23-59-59',
													'type' => $EntityType));
							
		$results = $query->getResult();
		
		$locale = $this->getRequest()->getLocale();
		return $this->render('TvDatabaseHomeBundle:Default:sidebar.html.twig', array(
									'_locale' => $locale,
									'results' => $results));
	}
}