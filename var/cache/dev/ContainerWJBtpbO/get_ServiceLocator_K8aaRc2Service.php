<?php

namespace ContainerWJBtpbO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K8aaRc2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k8aaRc2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k8aaRc2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reponse' => ['privates', '.errored..service_locator.k8aaRc2.App\\Entity\\Reponses', NULL, 'Cannot autowire service ".service_locator.k8aaRc2": it needs an instance of "App\\Entity\\Reponses" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'reponse' => 'App\\Entity\\Reponses',
        ]);
    }
}
