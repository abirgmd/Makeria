<?php

namespace ContainerRxzOhNr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O3A1vmOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O3A1vmO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O3A1vmO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'message' => ['privates', '.errored..service_locator.O3A1vmO.App\\Entity\\Message', NULL, 'Cannot autowire service ".service_locator.O3A1vmO": it needs an instance of "App\\Entity\\Message" but this type has been excluded in "config/services.yaml".'],
        ], [
            'message' => 'App\\Entity\\Message',
        ]);
    }
}
