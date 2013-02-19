<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

class SearchController extends Controller
{
    public function SearchAction()
    {
        $locale = $this->getRequest()->getLocale();
        return $this->render('TvDatabaseHomeBundle:Default:search.html.twig',
                array('_locale' => $locale
                ));
    }
    public function SearchResultAction(Request $req)
    {
    	if($text = $req->get('searchText'))
    	{
            //$text = $req->get('searchText');

            $con = mysql_connect('localhost','root','Praksa2012');
            mysql_select_db('Praksa2012');
            mysql_set_charset('utf8',$con);
            
            $query = 'SELECT t.TvName, e.DateTime, a.Value, e.TvStation, e.EntityId
                            FROM EAVEntity e,EAVAttributeValue a, TVStation t
                        WHERE a.EntityId = e.EntityId AND e.TvStation = t.TvId AND MATCH(a.Value) AGAINST
                        ("' . $text . '" IN BOOLEAN MODE) ORDER BY DATE(e.DateTime) ASC, t.TvName ASC;';
            
            $result = mysql_query($query);
            
            $return = array();
            while($row = mysql_fetch_array($result))
            {
                array_push($return, $row);
            }
            $locale = $this->getRequest()->getLocale();
            mysql_close($con);
            return $this->render('TvDatabaseHomeBundle:Default:searchResult.html.twig', 
                    array('_locale' => $locale,
                            'results' => $return,
                    		'search' => $text
                            ));
    	}
    	else
    	{
    		$locale = $this->getRequest()->getLocale();
    		return $this->render('TvDatabaseHomeBundle:Default:search.html.twig',
    				array('_locale' => $locale
    				));
    	}

        }
        
        public function FilterAction($req)
        {
        	$types = $this->getDoctrine()->getRepository('AcmeStoreBundle:MetaEAVEntityType')->findAll();
        	$televisions = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->findAll();
        	$filter = false;
        	$bTypes = array();
        	$tvs = array();
        	
        	$requested = '';
        	if($this->getRequest()->get('broadcastTypes') || $this->getRequest()->get('televisions'))
        	{
        		$requested = $this->getRequest()->getQueryString();
	        	$filters = explode('&', $requested);
	        	
	        	foreach($filters as $filter)
	        	{
	        		if(strstr($filter,'broadcastType'))
	        		{
	        			$trim = str_replace('broadcastType=', '', $filter);
	        			$trim = str_replace('%20', ' ', $trim);
	        			array_push($bTypes, $trim);
	        			//$bTypes += $trim;
	        		}
	        		else if(strstr($filter,'televisions'))
	        		{
	        			$trim = str_replace('televisions=', '', $filter);
	        			$trim = str_replace('%20', ' ', $trim);
	        			array_push($tvs, $trim);
	        			//$tvs += $trim + ', ';
	        		}
	        	}
	        	$filter = true;
        	}
        	
        	$con = mysql_connect('localhost','root','Praksa2012');
        	mysql_select_db('Praksa2012');
        	mysql_set_charset('utf8',$con);
        	$query = '';
        	if($filter)
        	{
        		$filterString = '';
        		if(empty($bTypes)) //ako se traze svi broadcast tipovi
        		{
        			foreach ($tvs as $tv)
        			{
        				$filterString =  $filterString . ",'" . $tv . "'";
        			}
        			$pos = strpos( $filterString, ',' );
        			if( $pos !== FALSE )
        			{
        				$filterString = substr_replace( $filterString, '', $pos, 1 );
        			}
        			$filterString = 't.TvName IN (' . $filterString . ')';
        		}
        		else if(empty($tvs)) //ako se traze sve emisije
        		{
        			foreach ($bTypes as $bt)
        			{
        				$filterString =  ',' . $filterString . "'" . $bt . "'";
        			}
        			$pos = strpos( $filterString, ',' );
        			if( $pos !== FALSE )
        			{
        				$filterString = substr_replace( $filterString, '', $pos, 1 );
        			}
        			$filterString = 'me.EntityTypeName IN (' . $filterString . ')';
        		}
        		else //ako se filtrira po oba kriterijuma
        		{
        			foreach ($tvs as $tv)
        			{
        				$filterString = $filterString . ",'" . $tv . "'";
        			}
        			$pos = strpos( $filterString, ',' );
        			if( $pos !== FALSE )
        			{
        				$filterString = substr_replace( $filterString, '', $pos, 1 );
        			}
        			
        			$filterString = 't.TvName IN (' . $filterString . ')';
        			
        			$subfilterString = '';
        			foreach ($bTypes as $bt)
        			{
        				$subfilterString =  $subfilterString . ",'" . $bt . "'";
        			}
        			
        			$pos = strpos( $subfilterString, ',' );
        			if( $pos !== FALSE )
        			{
        				$subfilterString = substr_replace( $subfilterString, '', $pos, 1 );
        			}
        			$subfilterString = 'me.EntityTypeName IN (' . $subfilterString . ')';
        			
        			$filterString = $filterString . 'AND ' . $subfilterString;
        			
        			
        		}
        		$history = $this->getRequest()->get('history');
        		if($history === 'hist')
        		{
        			$today = date_create(date('Y-m-d H:i:s'));//trenutni datum
        			$history = 'AND e.DateTime > "' . $today->format('Y-m-d H-i-s') . '"';
        		}
        		else $history = '';
        		
	        	$query = 'SELECT t.TvName, e.DateTime, a.Value, e.TvStation, e.EntityId, me.EntityTypeName
	                            FROM EAVEntity e,EAVAttributeValue a, TVStation t, MetaEAVEntityType me
	                        WHERE a.EntityId = e.EntityId 
	        					AND e.TvStation = t.TvId
	        					AND  me.EntityTypeId = e.EntityTypeId
	        					AND ' . $filterString . $history . '
	        					AND MATCH(a.Value) AGAINST
	                        ("' . $req . '" IN BOOLEAN MODE) ORDER BY DATE(e.DateTime) ASC, t.TvName DESC;';
        	}
        	else 
        	{
        		$history = $this->getRequest()->get('history');
        		if($history === 'hist')
        		{
        			$today = date_create(date('Y-m-d H:i:s'));//trenutni datum
        			$history = 'AND e.DateTime > "' . $today->format('Y-m-d H-i-s') . '"';
        		}
        		else $history = '';
        		$query = 'SELECT t.TvName, e.DateTime, a.Value, e.TvStation, e.EntityId, me.EntityTypeName
	                            FROM EAVEntity e,EAVAttributeValue a, TVStation t, MetaEAVEntityType me
	                        WHERE a.EntityId = e.EntityId
	        					AND e.TvStation = t.TvId ' . $history . '
	        					AND  me.EntityTypeId = e.EntityTypeId
	        					AND MATCH(a.Value) AGAINST
	                        ("' . $req . '" IN BOOLEAN MODE) ORDER BY DATE(e.DateTime) ASC, t.TvName DESC;';
        	}
        	
        	if(!$result = mysql_query($query))
        		return new Response('<html><body>query error:' . $query . '</body></html>');
        	
        	$return = array();
        	while($row = mysql_fetch_array($result))
        	{
        		array_push($return, $row);
        	}
        	$locale = $this->getRequest()->getLocale();
        	mysql_close($con);
        	
        	$locale = $this->getRequest()->getLocale();
        	return $this->render('TvDatabaseHomeBundle:Default:filterpage.html.twig',
        			array('_locale' => $locale,
        					'search' => $req,
        					'types' => $types,
        					'televisions' => $televisions,
        					'req' => $requested,
        					'bTypes' => $bTypes,
        					'tvs' => $tvs,
        					'filter' => false,
        					'results' => $return,
        					'query' => $query		
        			));
        }
}