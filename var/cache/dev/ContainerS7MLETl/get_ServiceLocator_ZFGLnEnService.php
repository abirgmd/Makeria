<?php

namespace ContainerS7MLETl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZFGLnEnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zFGLnEn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zFGLnEn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'evaluationRepository' => ['privates', '.errored.Fladu7y', NULL, 'Cannot determine controller argument for "App\\Controller\\PageController::loadReviews()": the $evaluationRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\EvaluationRepository". Did you forget to add a use statement?'],
        ], [
            'evaluationRepository' => '?',
        ]);
    }
}
