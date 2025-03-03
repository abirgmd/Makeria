<?php

namespace ContainerNi7xDEk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VxAVubpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VxAVubp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VxAVubp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'paiement' => ['privates', '.errored..service_locator.VxAVubp.App\\Entity\\Paiement', NULL, 'Cannot autowire service ".service_locator.VxAVubp": it needs an instance of "App\\Entity\\Paiement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'paiement' => 'App\\Entity\\Paiement',
        ]);
    }
}
