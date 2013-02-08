<?php

namespace TvDatabase\LoginBundle\DependencyInjection\Security\Factory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;

class TvDatabaseFactory implements SecurityFactoryInterface {
	
	public function create(ContainerBuilder $container, $id, $config, $userProvider, $defaultEntryPoint)
	{	
	    $providerId = 'security.authentication.provider.tvdatabase.'.$id;
	    $container
	    ->setDefinition($providerId, new DefinitionDecorator('tvdatabase.security.authentication.provider'))
	    ->replaceArgument(0, new Reference($userProvider))
	    ;
		
	    $listenerId = 'security.authentication.listener.tvdatabase.'.$id;
	    $listener = $container->setDefinition($listenerId, new DefinitionDecorator('tvdatabase.security.authentication.listener'));
		
	    return array($providerId, $listenerId, $defaultEntryPoint);
	}
	public function getPosition() {
		return 'pre_auth';
	}

	public function getKey() {
		return 'tvdatabase';
	}
	
	public function addConfiguration(NodeDefinition $node) {
		$node->children()->scalarNode('lifetime')->defaultValue(300)->end();
	}

}
