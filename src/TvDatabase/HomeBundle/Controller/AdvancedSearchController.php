<?php

namespace TvDatabase\HomeBundle\Controller;

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
    	$session = new Session();
    	$session->clear();
    	
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
    public function advancedSearchResponseAction(Request $request, $page=null)
    {
    	$session = new Session();
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
    			array_push($queries, "ent.Datetime > " . date_create($reqDate)->format('Y-m-d'));
    		 
    		if($reqDate = $request->get('startDate'))
    			array_push($queries, "ent.Datetime < " . date_create($reqDate)->format('Y-m-d'));

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
    	}
    	
    	
    	
    	$session->set("query", $query);
    	
    	$entities = $this->getDoctrine()->getManager();
    	
    	$objectQuery = $entities->createQuery($query);
    	
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
        		array('pagerfanta' => $pagerfanta));
        //return new Response($request->get('televisions') . $request->get('televisions'));
        
        //return new Response($whereQuery);
        //return new Response($count);
    }
}