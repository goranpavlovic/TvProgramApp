<?php

namespace TvDatabase\HomeBundle\Controller;

use Acme\StoreBundle\Entity\EAVAttributeValue;

use Acme\StoreBundle\AcmeStoreBundle;

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
        return $this->render('TvDatabaseHomeBundle:Default:show.html.twig', 
        		array(	'attributes' => $show->getAttributes(),
        				'entity' => $show,
        				 '_locale' => $locale));
    
    }
    
    public function editAction($attribute)
    {
    	$new = false;
    	$em = $this->getDoctrine()->getManager();
    	if($attribute = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')->find($attribute))
    	{
	    	if($req = $this->getRequest()->get('value'))
	    	{
	    		$attribute->setValue($req);
	    		$em->persist($attribute);
	    		$em->flush();
	    		
	    		$locale = $this->getRequest()->getLocale();
	    		$req = $this->getRequest()->get('value');
	    		return $this->render('TvDatabaseHomeBundle:Default:editshow.html.twig',
	    				array('attribute' => $attribute,
	    						'_locale' => $locale,
	    						'new' => $new
	    				));
	    	}
	    	else
	    	{
	    		$locale = $this->getRequest()->getLocale();
	    		return $this->render('TvDatabaseHomeBundle:Default:editshow.html.twig',
	    				array('attribute' => $attribute,
	    						'_locale' => $locale
	    				));
	    	}
    	}
    	else
    	{
    		$new = true;
    		
    		$locale = $this->getRequest()->getLocale();
    		return $this->render('TvDatabaseHomeBundle:Default:addshow.html.twig',
    				array('attribute' => $attribute,
    						'_locale' => $locale,
    						'new' => $new
    				));
    	}
    	

    }
    
    public function addAction($entity)
    {    	
    	$em = $this->getDoctrine()->getManager();
    	$entity = $em->getRepository('AcmeStoreBundle:EAVEntity')->find($entity);
    	$locale = $this->getRequest()->getLocale();
		return $this->render('TvDatabaseHomeBundle:Default:addshow.html.twig', 
    			array(	'entity' => $entity,
    					 '_locale' => $locale,
    					));
    }
    
    public function addNewAction($entity, $set, $attribute)
    {
    	$em = $this->getDoctrine()->getManager();
    	$ent = $em->getRepository('AcmeStoreBundle:EAVEntity')->find($entity);
    	
    	//$att = $em->getRepository('AcmeStoreBundle:EAVAttributeValue')->findBy(array('entity' => $ent, 'AttributeId' => $attribute));
    	
    	$query = $em->createQuery('SELECT a FROM AcmeStoreBundle:EAVAttributeValue a JOIN a.entity e
    								WHERE e.EntityId = :ent AND a.AttributeId = :att AND a.AttributeSetId = :set')
    								->setParameters(array(	'ent'=> $ent,
    														'att' => $attribute,
    														'set' => $set));
    	if($attr = $query->getResult())
    	{
    			$locale = $this->getRequest()->getLocale();
    			return $this->render('TvDatabaseHomeBundle:Default:editshow.html.twig',
    					array(	'_locale' => $locale,
    							'attribute' => $attr[0]
    					));
    	}
    	else
    	{
    		$att = new EAVAttributeValue();
    		$att->setAttributeId(intval($attribute));
    		$att->setAttributeSetId(intval($set));
    		$att->setValue("Enter here");
    		
    		$att->setAttributeMeta($em->getRepository('AcmeStoreBundle:MetaEAVAttribute')->find($attribute));
    		$att->setAttributeSetMeta($em->getRepository('AcmeStoreBundle:MetaEAVAttributeSet')->find($set));
    		$att->setEntity($em->getRepository('AcmeStoreBundle:EAVEntity')->find($entity));
    		
    		$con = mysql_connect('localhost','root','Praksa2012');
    		mysql_select_db('Praksa2012');
    		$query = 'SELECT GenerateGUID() AS GUID';
    		$res = mysql_query($query);
    		$id = mysql_fetch_array($res);
    		
    		$att->setValueId($id['GUID']);
    		
    		$em->persist($att);
    		$em->flush();
    		
    		$locale = $this->getRequest()->getLocale();
    		return $this->render('TvDatabaseHomeBundle:Default:editshow.html.twig',
    				array(	'_locale' => $locale,
    						'attribute' => $att->getValueId()
    				));
    	}
    }
}