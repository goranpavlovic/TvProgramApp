<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;

use Doctrine\ORM\Query\ResultSetMapping;

use Facebook\Facebook;

use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Pagerfanta\Pagerfanta;

use Pagerfanta\Adapter\ArrayAdapter;

use Symfony\Component\HttpFoundation\Session\Session;

class AdvancedSearchController extends Controller
{
    public function advancedSearchAction()
    {
    	$user = $this->getUser();
    	 
    	$report = "User: " . $user . "\n";
    	 
    	$token = $this->get('security.context')->getToken();
    	if($token != null)
    	{
    		$user = $token->getUser();
    		if($user != null)
    		{
    			$report =  $report . "Security user : " . $user . "\n";
    		}
    		else
    		{
    			$report = $report . "Security user null!!!\n";
    		}
    	}
    	else
    	{
    		$report = $report . "Token null!!!\n";
    	}
    	
    	
    	$locale = $this->getRequest()->getLocale();
    	
    	$session = $this->getRequest()->getSession();
    	
    	$session->remove("query");
    	
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
                'televisions' => $tvNameArray,
        		'_locale' => $locale,
        		'report' => $report
        ));
        /*
    	
    	
    	return new Response($report);
    	*/
        //$config = Array();
    	//$config['appId'] = '1060810547390883';
  		//$config['secret'] = '58bfdc57e57ab87796ddb788bb4e0b67';
  		//$config['fileUpload'] = false; // optional
    	
    	//$facebook = new Facebook($config);
    	
    	//$params = array(
    	//		'scope' => 'read_stream, friends_likes',
    	//		'redirect_uri' => 'http://www.symfony1server.com/login_check'
    	//);
    	
    	//$loginUrl = $facebook->getLoginUrl($params);
    	
    	//$this->redirect($loginUrl);
    	
    	//return new RedirectResponse($loginUrl);
    	
    	//if($facebook->getUser() != null)
    	//	return new Response($facebook->getUser()->getUsername());
    	//else return new Response("User Null!!!");
    }
    public function advancedSearchResponseAction(Request $request, $page=null)
    {
    	$locale = $this->getRequest()->getLocale();
    	
    	$session = $this->getRequest()->getSession();
    	
    	$query = "";
    	
    	if($page != null)
    	{
    		$query = $session->get("query");
    	}
    	else
    	{
    		$request_string = $request->__toString();
    		$header_string = $request->headers->__toString();
    		$request_string = str_replace($header_string, "", $request_string);
    		$request_string = strstr($request_string, "HTTP");
    		$request_string = str_replace("HTTP/1.1", "", $request_string);
    		$request_string = str_replace("\r\n","",$request_string);
    		 
    		$query = "SELECT ent FROM AcmeStoreBundle:EAVEntity as ent ";
    		
    		$whereQuery = "";
    		
    		$groupQuery = "";
    		//$groupQuery = " GROUP BY ent.tv ";
    		
    		//$orderQuery = "";
    		$orderQuery = " ORDER BY ent.tv ASC , ent.Datetime DESC";
    		$queries = Array();
    		 
    		$result = "";
    		 
    		$request_params = explode("&", $request_string);
    		 
    		$broadcastTypes = Array();
    		$televisions = Array();
    		 
    		foreach($request_params as $param)
    		{
    			$key = strstr($param, '=', true);
    			$key = str_replace("=", "", $key);
    		
    			$value = strstr($param, '=');
    			$value = str_replace("=", "", $value);
    			$value = str_replace("+", " ", $value);
    		
    			if($key === "broadcastType" )
    			{
    				array_push($broadcastTypes, $value);
    				 
    			}
    			else if($key === "televisions" )
    			{
    				array_push($televisions, $value);
    			}
    		
    			$result = $result . $value . '<br />';
    		}
    		 
    		if(count($broadcastTypes) > 0)
    		{
    			array_push( $queries, " tp.EntityTypeName IN ('" . implode($broadcastTypes, "','") . "')");
    			$query = $query . "JOIN ent.entityType as tp ";
    		}
    		 
    		if(count($televisions) > 0)
    		{
    			array_push($queries, "tv.TvName IN ('" . implode($televisions, "','") . "')");
    			$query = $query . "JOIN ent.tv as tv ";
    		}
    		 
    		$query = $query . "WHERE ";
    		 
    		if($reqDate = $request->get('startDate'))
    		{
    			array_push($queries, "ent.Datetime > '" . date_create($reqDate)->format('Y-m-d H:i:s') . "'");
    		}
    		 
    		if($reqDate = $request->get('endDate'))	
    		{
    			array_push($queries, "ent.Datetime < '" . date_create($reqDate)->format('Y-m-d H:i:s') . "'");
    		}

    		$count = 0;
    		
    		foreach($queries as $query_row)
    		{
    			if($count < count($queries) - 1)
    			{
    				$whereQuery = $whereQuery . $query_row . " AND ";
    			}
    			else
    			{
    				$whereQuery = $whereQuery . $query_row;
    			}
    			$count++;
    		}
    		 
    		$query = $query . $whereQuery;
    		$query = $query . $groupQuery;
    		$query = $query . $orderQuery;
    	}
    	
    	
    	
    	$session->set("query", $query);
    	
    	$entities = $this->getDoctrine()->getManager();
    	
    	$objectQuery = $entities->createQuery($query);//->orderBy('ent.tv ASC, ent.Datetime DESC');
    	
    	//$objectQuery;
    	
    	$results = $objectQuery->getResult();
    	
    	$adapter = new ArrayAdapter($results);
    	
    	$pagerfanta = new Pagerfanta($adapter);
    	
    	$pagerfanta->setMaxPerPage(25);
    	
    	if(!$page)
    	{
    		$page = 1;
    	}
    	
    	try
    	{
    		$pagerfanta->setCurrentPage($page);
    	}
    	catch(NotValidCurrentPageException $e)
    	{
    		throw new NotFoundHttpException();
    	}
    	
        return $this->render('TvDatabaseHomeBundle:Default:advsearchresponse.html.twig', 
        		array(
        				'pagerfanta' => $pagerfanta, 
        				'_locale' => $locale
        				));
        /*
    	$locale = $this->getRequest()->getLocale();
    	 
    	$session = $this->getRequest()->getSession();
    	
    	$query = "";
    	
    	if($page != null)
    	{
    		$query = $session->get("query");
    	}
    	else
    	{
    		$request_string = $request->__toString();
    		$header_string = $request->headers->__toString();
    		$request_string = str_replace($header_string, "", $request_string);
    		$request_string = strstr($request_string, "HTTP");
    		$request_string = str_replace("HTTP/1.1", "", $request_string);
    		$request_string = str_replace("\r\n","",$request_string);
    		
    		$request_params = explode("&", $request_string);
    		
    		$queries = Array();
    		
    		$query = "SELECT ent FROM AcmeStoreBundle:EAVEntity as ent ";
    		
    		$query = "SELECT ent FROM EAVEntity ent, TVStation tv, EAVAttributeValue atr"
    				. "WHERE ent.TvStation = tv.TvID AND atr.EntityId = ent.EntityId"
    				;
    		
    		$whereQuery = "";
    		$groupQuery = "";
    		$orderQuery = "";
    		 
    		$broadcastTypes = Array();
    		$televisions = Array();
    		 
    		foreach($request_params as $param)
    		{
    			$key = strstr($param, '=', true);
    			$key = str_replace("=", "", $key);
    		
    			$value = strstr($param, '=');
    			$value = str_replace("=", "", $value);
    			$value = str_replace("+", " ", $value);
    		
    			if($key === "broadcastType" )
    			{
    				array_push($broadcastTypes, $value);	
    			}
    			else if($key === "televisions" )
    			{
    				array_push($televisions, $value);
    			}
    		}
    		
    		if(count($broadcastTypes) > 0)
    		{
    			array_push( $queries, " tp.EntityTypeName IN ('" . implode($broadcastTypes, "','") . "')");
    			$query = $query . "JOIN ent.entityType as tp ";
    		}
    		 
    		if(count($televisions) > 0)
    		{
    			array_push($queries, "tv.TvName IN ('" . implode($televisions, "','") . "')");
    			$query = $query . "JOIN ent.tv as tv ";
    		}
    		
    		if($reqDate = $request->get('startDate'))
    		{
    			array_push($queries, "ent.Datetime > '" . date_create($reqDate)->format('Y-m-d H:i:s') . "'");
    		}
    		
    		if($reqDate = $request->get('endDate'))
    		{
    			array_push($queries, "ent.Datetime < '" . date_create($reqDate)->format('Y-m-d H:i:s') . "'");
    		}
    		
    		$count = 0;
    		
    		foreach($queries as $query_row)
    		{
    			if($count < count($queries) - 1)
    			{
    				$whereQuery = $whereQuery . $query_row . " AND ";
    			}
    			else
    			{
    				$whereQuery = $whereQuery . $query_row;
    			}
    			$count++;
    		}
    		
    		//$query = $query . $whereQuery;
    		//$query = $query . $groupQuery;
    		//$query = $query . $orderQuery;
    	}
    	
    	$session->set("query", $query);
    	
    	//$resSetMapping = new ResultSetMapping();
    	//$resSetMapping->addEntityResult("EAVEntity", "ent");
    	//$resSetMapping->addFieldResult("", "", "");
    	
    	//$entities = $this->getDoctrine()->getManager();
    	
    	//$entities->createNativeQuery( $query, $resSetMapping);
    	
    	
    	return new Response($query);
    	*/
    }
}