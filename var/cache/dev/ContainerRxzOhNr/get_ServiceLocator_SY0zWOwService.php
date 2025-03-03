<?php

namespace ContainerRxzOhNr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SY0zWOwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SY0zWOw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SY0zWOw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reclamation' => ['privates', '.errored..service_locator.SY0zWOw.App\\Entity\\Reclamation', NULL, 'Cannot autowire service ".service_locator.SY0zWOw": it needs an instance of "App\\Entity\\Reclamation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reclamation' => 'App\\Entity\\Reclamation',
        ]);
    }
}
