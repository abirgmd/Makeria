<?php

namespace ContainerOvHvtxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D_Iw2YaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D.Iw2Ya' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D.Iw2Ya'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'reponse' => ['privates', '.errored..service_locator.D.Iw2Ya.App\\Entity\\Reponses', NULL, 'Cannot autowire service ".service_locator.D.Iw2Ya": it needs an instance of "App\\Entity\\Reponses" but this type has been excluded in "config/services.yaml".'],
        ], [
            'reponse' => 'App\\Entity\\Reponses',
        ]);
    }
}
