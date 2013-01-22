<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class AdvancedSearchController extends Controller
{
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