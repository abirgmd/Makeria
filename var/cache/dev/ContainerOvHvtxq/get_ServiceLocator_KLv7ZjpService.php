<?php

namespace ContainerOvHvtxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KLv7ZjpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KLv7Zjp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KLv7Zjp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'product' => ['privates', '.errored.TJ4hCMf', NULL, 'Cannot determine controller argument for "App\\Controller\\ProduitController::addToFavorites()": the $product argument is type-hinted with the non-existent class or interface: "App\\Controller\\Product". Did you forget to add a use statement?'],
            'userRepository' => ['privates', '.errored.uYFII9M', NULL, 'Cannot determine controller argument for "App\\Controller\\ProduitController::addToFavorites()": the $userRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\UserRepository". Did you forget to add a use statement?'],
        ], [
            'em' => '?',
            'product' => '?',
            'userRepository' => '?',
        ]);
    }
}
