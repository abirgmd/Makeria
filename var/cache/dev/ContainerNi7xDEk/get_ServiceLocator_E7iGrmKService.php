<?php

namespace ContainerNi7xDEk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E7iGrmKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e7iGrmK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e7iGrmK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'orderInformationsRepository' => ['privates', 'App\\Repository\\OrderInformationsRepository', 'getOrderInformationsRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'entityManager' => '?',
            'orderInformationsRepository' => 'App\\Repository\\OrderInformationsRepository',
            'paginator' => '?',
        ]);
    }
}
