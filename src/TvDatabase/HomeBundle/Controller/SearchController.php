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
                        ("' . $text . '" IN BOOLEAN MODE);';
            
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
}