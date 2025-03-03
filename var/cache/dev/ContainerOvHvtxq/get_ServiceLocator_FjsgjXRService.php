<?php

namespace ContainerOvHvtxq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FjsgjXRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FjsgjXR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FjsgjXR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evaluationRepository' => ['privates', 'App\\Repository\\EvaluationRepository', 'getEvaluationRepositoryService', true],
        ], [
            'evaluationRepository' => 'App\\Repository\\EvaluationRepository',
        ]);
    }
}
