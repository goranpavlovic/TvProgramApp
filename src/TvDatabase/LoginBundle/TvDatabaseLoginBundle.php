<?php

namespace TvDatabase\LoginBundle;

use TvDatabase\LoginBundle\DependencyInjection\Security\Factory\TvDatabaseFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class TvDatabaseLoginBundle extends Bundle
{
	public function build(ContainerBuilder $container)
	{
		parent::build($container);
	
		$extension = $container->getExtension('security');
		$extension->addSecurityListenerFactory(new TvDatabaseFactory());
	}
}
