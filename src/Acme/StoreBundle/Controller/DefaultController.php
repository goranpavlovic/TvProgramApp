<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    public function ShowAction($id)
    {
	$entity = $this->getDoctrine()->getRepository('AcmeStoreBundle:TVStation')->find($id);
	if($entity)
		return new Response($entity->getEntities()->first()->getEntityId());
	else return new Response("empty");
    }
}
