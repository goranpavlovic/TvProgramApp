<?php

/*
 * This file is part of the FOSFacebookBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\FacebookBundle\DependencyInjection\Security\Factory;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\AbstractFactory;

use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;

//class FacebookFactory extends AbstractFactory
class FacebookFactory implements SecurityFactoryInterface {
	public function __construct() {
		
		/*
		$this->addOption('display', 'page');
		$this->addOption('app_url');
		$this->addOption('server_url');
		$this->addOption('create_user_if_not_exists', false);
		$this->addOption('redirect_to_facebook_login', true);
		*/
	}

	public function getPosition() {
		return 'pre_auth';
	}

	public function getKey() {
		return 'fos_facebook';
	}

	protected function getListenerId() {
		return 'fos_facebook.security.authentication.listener';
	}

	protected function createAuthProvider(ContainerBuilder $container, $id,
			$config, $userProviderId) {

		$authProviderId = 'fos_facebook.auth.' . $id;

		$definition = $container
				->setDefinition($authProviderId,
						new DefinitionDecorator('fos_facebook.auth'))
				->replaceArgument(0, $id);

		// with user provider
		if (isset($config['provider'])) {
			$definition->addArgument(new Reference($userProviderId))
					->addArgument(new Reference('security.user_checker'))
					->addArgument($config['create_user_if_not_exists']);
		}

		return $authProviderId;
	}

	protected function createEntryPoint($container, $id, $config,
			$defaultEntryPointId) {

		$entryPointId = 'fos_facebook.security.authentication.entry_point.'
				. $id;
		$container
				->setDefinition($entryPointId,
						new DefinitionDecorator(
								'fos_facebook.security.authentication.entry_point'))
				->replaceArgument(1, $config);

		// set options to container for use by other classes
		$container->setParameter('fos_facebook.options.' . $id, $config);

		return $entryPointId;
	}
	
	public function create(ContainerBuilder $container, $id, $config,
			$userProvider, $defaultEntryPoint) {
		// TODO: Auto-generated method stub
		
		$authProviderId = 'fos_facebook.auth.' . $id;
		
		$definition = $container
		->setDefinition($authProviderId,
				new DefinitionDecorator('fos_facebook.auth'))
				->replaceArgument(0, $id);
		
		// with user provider
		if (isset($config['provider'])) {
			$definition->addArgument(new Reference($userProviderId))
			->addArgument(new Reference('security.user_checker'))
			->addArgument($config['create_user_if_not_exists']);
		}
		
		$listenerId = 'fos_facebook.security.authentication.listener'
				. $id;
		$container
		->setDefinition($listenerId,
				new DefinitionDecorator(
						'fos_facebook.security.authentication.listener'));
		
		$entryPointId = 'fos_facebook.security.authentication.entry_point.'
				. $id;
		$container
		->setDefinition($entryPointId,
				new DefinitionDecorator(
						'fos_facebook.security.authentication.entry_point'))
						->replaceArgument(1, $config);
		
		// set options to container for use by other classes
		$container->setParameter('fos_facebook.options.' . $id, $config);
		
		return array($authProviderId, $listenerId, $entryPointId);

	}
	public function addConfiguration(NodeDefinition $builder) {
		// TODO: Auto-generated method stub
		$builder->children()->scalarNode('display')->defaultValue('page');
		$builder->children()->scalarNode('app_url');
		$builder->children()->scalarNode('server_url');
		$builder->children()->scalarNode('create_user_if_not_exists')->defaultValue(false);
		$builder->children()->scalarNode('redirect_to_facebook_login')->defaultValue(true);
		$builder->children()->scalarNode('login_path');
		$builder->children()->scalarNode('check_path');
		$builder->children()->scalarNode('default_target_path');
		$builder->end();
		/*
		$builder->attribute('display', 'page');
		$builder->attribute('app_url', '');
		$builder->attribute('server_url', '');
		$builder->attribute('create_user_if_not_exists', false);
		$builder->attribute('redirect_to_facebook_login', true);
		$builder->end();
		*/
	}

}
