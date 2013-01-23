<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpFoundation\Request;

class ShowController extends Controller
{
    public function showAction($id)
    {
        $em = $this->getDoctrine()->GetManager();
        $show = $em->getRepository('AcmeStoreBundle:EAVEntity')->find($id);
        $result = array();
        foreach($show->getAttributes() as $attribute)
        {
            $name = $em->getRepository('AcmeStoreBundle:MetaEAVAttribute')->find($attribute->getAttributeId());
            array_push($result, array('name' => $name->getAttributeName(),'value' => $attribute->getValue()));
        }
        $locale = $this->getRequest()->getLocale();
        return $this->render('TvDatabaseHomeBundle:Default:show.html.twig', array('attributes' => $result, '_locale' => $locale));
    
    }
}