<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

use Acme\StoreBundle\Entity\User;
use Acme\StoreBundle\Entity\TVStation;

class TVController extends Controller
{
    public function tvStationsAction()
    {
        $tvStation = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
        $users = $this->getDoctrine()->getRepository('AcmeStoreBundle:User');
        $nameArray = array();
        $checkStatusArray = Array();
        foreach($tvStation as $tv)
        {
            array_push($nameArray, $tv->getTvName());
            $checkStatusArray[$tv->getTvID()] = '';
        }
        $locale = $this->getRequest()->getLocale();
        $loggedIn = false;
        $token = $this->get('security.context')->getToken();
        if( $token != null )
        {
        	$user = $token->getUser();
        	if($user != null)
        	{
        		if($user !== 'anon.')
        		{
        			$loggedIn = true;
        			
        			$databaseUser = $users->find($user);
        			$counter = 0;
        			$userTvStations = $databaseUser->getTvStations();
        			foreach($userTvStations as $tv)
        			{
        				$checkStatusArray[$tv->getTvID()] = 'checked';
        			}
        		}
        		else 
        		{
        			$loggedIn = false;
        		}
        	}
        }
        return $this->render('TvDatabaseHomeBundle:Default:stations.html.twig',
        		 array( 'tvStations' => $tvStation, 
        		 		'statusArray' => $checkStatusArray,
        		 		'_locale' => $locale,
        		 		'loggedin' => $loggedIn
        		 		));
    }
    
    public function showTVAction($id, $date, Request $req)
    {
    	$connection = mysql_connect('localhost','root','Praksa2012');
    	$db = mysql_select_db('Praksa2012', $connection);
    	$result = mysql_query('SELECT DATE(MAX(DateTime)) FROM EAVEntity WHERE TvStation='. $id, $connection);
    	$row = mysql_fetch_array($result);
    	$maxDate = $row[0];
    	$result = mysql_query('SELECT DATE(MIN(DateTime)) FROM EAVEntity WHERE TvStation=' . $id, $connection);
    	$row = mysql_fetch_array($result);
    	$minDate = $row[0];
    	
        $today = null;
        if($reqDate = $req->get('startDate'))
        {
            $today = date_create($reqDate)->format('Y-m-d');
        }
        else if($date === 'today')
            //$today = date_create('2013-01-11 11:45:00');
            $today = date('Y-m-d');
        else
            //$today = date_create($date . '12:00:00');
            $today = $date;
        $em = $this->getDoctrine()->getManager();
        $tv = $em->getRepository('AcmeStoreBundle:TVStation')->find($id);
        $query = $em->createQuery('SELECT ent,a from AcmeStoreBundle:EAVEntity as ent JOIN ent.attributes a
				WHERE ent.Datetime < :preDate AND ent.Datetime > :postDate
				AND ent.TvStation = :tv ORDER BY ent.Datetime ASC')
    				->setParameters(array(
    				        'postDate' => $today . ' 00:00:00',
    				        'preDate' => $today . ' 24:00:00',
    				        'tv' => $id));//$tv->getTvId()));
    				
    				$results = $query->getResult();
    				
    				$locale = $this->getRequest()->getLocale();
    				$text = $this->get('translator')->trans('Translate') . ' ' . $locale;
    				$tomorrow = date_add(date_create($today), date_interval_create_from_date_string('1 day'))->format('Y-m-d');
    				$yesterday = date_sub(date_create($today), date_interval_create_from_date_string('1 day'))->format('Y-m-d');
    				$date = array('today' => $today, 'tomorrow' => $tomorrow, 'yesterday' => $yesterday);
    				return $this->render('TvDatabaseHomeBundle:Default:showTV.html.twig',
    				        array(
    				        		'results' => $results,
    				        		'tv' => $tv, 
    				        		'date' => $date, 
    				        		'_locale' => $locale,
    				        		'maxDate' => $maxDate,
    				        		'minDate' => $minDate
    				        		));
    }
    public function submitEmailChangesAction(Request $rq)
    {
    	$request_string = $rq->__toString();
    	$header_string = $rq->headers->__toString();
    	$request_string = str_replace($header_string, "", $request_string);
    	$request_string = strstr($request_string, "HTTP");
    	$request_string = str_replace("HTTP/1.1", "", $request_string);
    	$request_string = str_replace("\r\n","",$request_string);
    	$request_params = explode("&", $request_string);
    	
    	$entityManager = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation');
    	$userRepository = $this->getDoctrine()->getRepository('AcmeStoreBundle:User');
    	$token = $this->get('security.context')->getToken();
    	//$rq->getQueryString();
    	
    	if($token != null)
    	{
    		$user = $token->getUser();
    		if($user != null)
    		{
    			if($user !== 'anon.')
    			{
    				$databaseUser = $userRepository->find($user);
    				if($databaseUser != null)
    				{
    					$databaseUser->getTVStations()->clear();
    					
    					foreach($request_params as $param)
    					{
    						$reqParam = explode('=', $param);
    						
    						$tvStation = $repository->find($reqParam[0]);
    						
    						if($tvStation != null)
    						{
    							$databaseUser->addTVStation($tvStation);
    						}
    					}
    				}
    				$entityManager->persist($databaseUser);
    				$entityManager->flush();
    			}
    		}
    		return $this->forward('TvDatabaseHomeBundle:TV:tvStations');
    	}
    }
}