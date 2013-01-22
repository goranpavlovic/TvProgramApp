<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class TVController extends Controller
{
    public function tvStationsAction()
    {
    
        $tvStation = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
        $nameArray = array();
        foreach($tvStation as $tv)
        {
            array_push($nameArray, $tv->getTvName());
        }
        return $this->render('TvDatabaseHomeBundle:Default:stations.html.twig', array( 'tvStations' => $tvStation));
    }
    
    public function showTVAction($id, $date)
    {
        $today = null;
        if($date === 'today')
            //$today = date_create('2013-01-11 11:45:00');
            $today = date('Y-m-d');
        else
            //$today = date_create($date . '12:00:00');
            $today = $date;
        $em = $this->getDoctrine()->getManager();
        $tv = $em->getRepository('AcmeStoreBundle:TVStation')->find($id);
        $query = $em->createQuery('SELECT ent from AcmeStoreBundle:EAVEntity as ent
				WHERE ent.Datetime < :preDate AND ent.Datetime > :postDate
				AND ent.TvStation = :tv ORDER BY ent.Datetime ASC')
    				->setParameters(array(
    				        'postDate' => $today . ' 00:00:00',
    				        'preDate' => $today . ' 24:00:00',
    				        'tv' => $tv->getTvId()));
    				$results = array();
    				foreach($query->getResult() as $result)
    				{
    				    $nameId = $em->getRepository('AcmeStoreBundle:MetaEAVAttribute')
    				    ->findOneBy(array('AttributeName' => 'Name'));
    				    $name = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')
    				    ->findOneBy(array('AttributeId' => $nameId->getAttributeId(),
    				            'entity' => $result->getEntityId()));
    				    $resName = '';
    				    if($name)
    				        $resName = $name->getValue();
    				    else
    				        $resName = 'Name not in database';
    				    array_push($results,array('time' => $result->getDatetime()->format('H:i'),
    				    'name' => $resName,
    				    'id' => $result->getEntityId()));
    				}
    				return $this->render('TvDatabaseHomeBundle:Default:showTV.html.twig',
    				        array('results' => $results,'tv' => $tv->getTvName(), 'date' => $today));
    }
}