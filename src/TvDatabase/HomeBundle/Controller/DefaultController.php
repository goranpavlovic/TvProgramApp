<?php

namespace TvDatabase\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TvDatabaseHomeBundle:Default:index.html.twig');
    }
    public function tvStationsAction()
    {
	$dataProvider = $this->get('store');

	$element = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->find('1');
	if($element)
	{
		return new Response($element->getTvName());		
	}
	else
	{
		return $this->render('TvDatabaseHomeBundle:Default:stations.html.twig');
	}
    }
    public function tvProgramAction()
    {
	return $this->render('TvDatabaseHomeBundle:Default:program.html.twig');
    }
}
