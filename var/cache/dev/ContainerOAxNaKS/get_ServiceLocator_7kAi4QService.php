<?php

namespace ContainerOAxNaKS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7kAi4QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7kAi4Q_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7kAi4Q_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reply' => ['privates', '.errored..service_locator.7kAi4Q_.App\\Entity\\Reply', NULL, 'Cannot autowire service ".service_locator.7kAi4Q_": it needs an instance of "App\\Entity\\Reply" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'reply' => 'App\\Entity\\Reply',
        ]);
    }
}
