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
	$results = array();

	$token = $this->get('security.context')->getToken();
	$user = null;
	if($token !== null)
		$user = $token->getUser();
	
	$displays = array();
	if($user === null)
		$displays = array('Prva TV','RTS1', 'RTS2','Pink', "TV Zona", "B92");//koje se prikazuju
	else
	{
		$em = $this->getDoctrine()->getManager();
		$u = $em->getRepository('AcmeStoreBundle:User')->find($user);
		if($u === null)
			$displays = array('Prva TV','RTS1', 'RTS2','Pink', "TV Zona", "B92");//koje se prikazuju
		else
		{
			$check = $u->getTVStations();
			if($check[0] === null)
				$displays = array('Prva TV','RTS1', 'RTS2','Pink', "TV Zona", "B92");//koje se prikazuju
			else
			{
				foreach($u->getTVStations() as $tv)
				{
					array_push($displays,$tv->getTvName());
				}
			}
		}
	}
	
	
	foreach($displays as $display)
	{
		$em = $this->getDoctrine()->GetManager();
		$tv =	$em->getRepository('AcmeStoreBundle:TVStation')->findOneBy(array('TvName' => $display));
		if(!$tv)
			break;
		$query = $em->createQuery
			('SELECT e FROM AcmeStoreBundle:EAVEntity as e WHERE e.TvStation = :tv AND e.Datetime <= :stampmax ORDER BY e.Datetime DESC')
				->setParameters(array('tv' => $tv->getTvId(),
							'stampmax' => $today->format('Y-m-d H-i-s')
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
		else if(!$shows && $showsNext)
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
		else if($shows && !$showsNext)
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
		else
		{
					array_push($results,array(
			            'tv'=> $tv,
			            'shows'=> 'xx:xx',
			            'name'=> $resName,
			            'nameId' => null,
						'showsNext'=> 'xx:xx',
						'nameNext' => $nNext,
						'nameNextId' =>null
						));
		}
	}
	$locale = $this->getRequest()->getLocale();
        return $this->render('TvDatabaseHomeBundle:Default:index.html.twig',array( 'results' => $results, '_locale' => $locale));
    }
}








