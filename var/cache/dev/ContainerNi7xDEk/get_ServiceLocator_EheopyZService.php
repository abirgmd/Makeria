<?php

namespace ContainerNi7xDEk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EheopyZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eheopyZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eheopyZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evaluation' => ['privates', '.errored..service_locator.eheopyZ.App\\Entity\\Evaluation', NULL, 'Cannot autowire service ".service_locator.eheopyZ": it needs an instance of "App\\Entity\\Evaluation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'evaluation' => 'App\\Entity\\Evaluation',
        ]);
    }
}
