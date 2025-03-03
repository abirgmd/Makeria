<?php

namespace ContainerRxzOhNr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LBLwrGeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lBLwrGe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lBLwrGe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentaireRepository' => ['privates', 'App\\Repository\\CommentaireRepository', 'getCommentaireRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'commentaireRepository' => 'App\\Repository\\CommentaireRepository',
            'entityManager' => '?',
        ]);
    }
}
