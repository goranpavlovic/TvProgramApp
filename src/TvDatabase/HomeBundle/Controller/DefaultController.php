<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
public function indexAction()
{
	$today = date_create(date('Y-m-d H:i:s'));//trenutni datum
	//$today = date_create('2013-01-11 11:45:00');
	$results = array();
	
	$displays = array('RTS1','Prva TV');//koje se prikazuju
	foreach($displays as $display)
	{
		$em = $this->getDoctrine()->GetManager();
		$tv =	$em->getRepository('AcmeStoreBundle:TVStation')->findOneBy(array('TvName' => $display));
		$query = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime <= :stampmax ORDER BY e.Datetime DESC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s')
							/*'stampmin' => date_sub($today,date_interval_create_from_date_string('1 day'))*/
							));
		$query->setMaxResults(1);
		$shows = $query->getResult();
		$name = null;
		if($shows)
		{
		$name = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')->
						findOneBy(array('entity' => $shows[0]->getEntityId(), 'AttributeId' => 7));
		}
		$resName = '';
		if($name)
			$resName = $name->getValue();
		else
			$resName = 'Name not in database';
		//sledeca
			$queryNext = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime >= :stampmax ORDER BY e.Datetime ASC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s')
							//'stampmin' => date_add($today,date_interval_create_from_date_string('1 day'))
							));
		$queryNext->setMaxResults(1);
		$showsNext = $queryNext->getResult();
		$nameNext = null;
		if($showsNext)
		{
		$nameNext = $this->getDoctrine()->getRepository('AcmeStoreBundle:EAVAttributeValue')->
						findOneBy(array('entity' => $showsNext[0]->getEntityId(), 'AttributeId' => 7));
		}
		$nNext = '';
		if($nameNext)
			$nNext=$nameNext->getValue();
		else
			$nNext = 'Name not in database';
		//$shows = $em->getRepository('AcmeStoreBundle:EAVEntity')->findBy(array('TvStation' => $tv->GetTvId()));
		if($shows && $showsNext)
		{
		array_push($results,array(
				'tv'=> $tv,
				'shows'=> $shows[0]->getDatetime()->format('H:i'),
				'name'=> $resName,
				'nameId' => $shows[0]->getEntityId(),
				'showsNext'=> $showsNext[0]->getDatetime()->format('H:i'),
				'nameNext' => $nNext,
				'nameNextId' => $showsNext[0]->getEntityId()
				));
		}
		else if(!$shows)
		{
		    array_push($results,array(
		            'tv'=> $tv,
		            'shows'=> 'xx:xx',
		            'name'=> $resName,
		            'nameId' => null,
		            'showsNext'=> $showsNext[0]->getDatetime()->format('H:i'),
		            'nameNext' => $nNext,
		            'nameNextId' => $showsNext[0]->getEntityId()
		    ));
		}
		else
		{
		    array_push($results,array(
		            'tv'=> $tv,
		            'shows'=> $shows[0]->getDatetime()->format('H:i'),
		            'name'=> $resName,
		            'nameId' => $shows[0]->getEntityId(),
		            'showsNext'=> 'xx:xx',
		            'nameNext' => $nNext,
		            'nameNextId' =>null
		    ));
		}
	}
	
        return $this->render('TvDatabaseHomeBundle:Default:index.html.twig',array( 'results' => $results));
    }
}








