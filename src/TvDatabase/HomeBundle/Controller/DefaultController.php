<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
	//$today = date_create(date('Y-m-s H:i:s'));
	
	$today = date_create('2013-1-11 11:45:00');
	$results = array();
	/*
	$displays = array('RTS1','Prva TV');
	foreach($displays as $display)
	{
		$em = $this->getDoctrine()->GetManager();
		$tv =	$em->getRepository('AcmeStoreBundle:TVStation')->findOneBy(array('TvName' => $display));
		$query = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime < :stampmax AND e.Datetime > :stampmin ORDER BY e.Datetime DESC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s'), 
							'stampmin' => date_sub($today,date_interval_create_from_date_string('1 day'))));
		$query->setMaxResults(1);
		$shows = $query->getResult();
		$name = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')->findOneBy(array('entity' => $shows[0]->getEntityId(), 'AttributeId' => 7));
		//sledeca
			$query = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime > :stampmax AND e.Datetime < :stampmin ORDER BY e.Datetime ASC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s'), 
							'stampmin' => date_add($today,date_interval_create_from_date_string('1 day'))));
		$query->setMaxResults(1);
		$showsNext = $query->getResult();
		$nameNext = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')->findOneBy(array('entity' => $showsNext[0]->getEntityId(), 'AttributeId' => 7));
		//$shows = $em->getRepository('AcmeStoreBundle:EAVEntity')->findBy(array('TvStation' => $tv->GetTvId()));
		array_push($results,array(
				'tv'=> $tv->GetTvName(),
				'shows'=> $shows[0]->getDatetime()->format('H:i'),
				'name'=> $name->getValue(),
				'showsNext'=> $showsNext[0]->getDatetime()->format('H:i'),
				//'nameNext' => $nameNext->getValue()
				));
	}
	*/
        return $this->render('TvDatabaseHomeBundle:Default:index.html.twig',array( 'results' => $results));
    }
    public function tvStationsAction()
    {

	$tvStation = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
	$nameArray = array();
	foreach($tvStation as $tv)
	{
		array_push($nameArray, $tv->getTvName());
	}
	return $this->render('TvDatabaseHomeBundle:Default:stations.html.twig', array( 'names' => $nameArray) );
    }
    public function advancedSearchAction()
    {
	$tvTypes = $this->getDoctrine()->getRepository('AcmeStoreBundle:MetaEAVEntityType')->findAll();
	$typeNameArray = array();
	foreach($tvTypes as $type)
	{
		array_push($typeNameArray, $type->getEntityTypeName());
	}
	$televisions = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
	$tvNameArray = array();
	foreach($televisions as $television)
	{
		array_push($tvNameArray, $television->getTvName());
	}
	return $this->render('TvDatabaseHomeBundle:Default:advsearchform.html.twig', array(
		'types' => $typeNameArray,
		'televisions' => $tvNameArray
		));
    }
    public function advancedSearchResponseAction(Request $request)
    {
	return $this->render('TvDatabaseHomeBundle:Default:advsearchresponse.html.twig');
    }
}
