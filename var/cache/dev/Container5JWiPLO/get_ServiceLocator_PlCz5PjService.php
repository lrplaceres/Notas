<?php

namespace Container5JWiPLO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PlCz5PjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.plCz5Pj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.plCz5Pj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'nota' => ['privates', 'App\\Repository\\NotaRepository', 'getNotaRepositoryService', true],
        ], [
            'nota' => 'App\\Repository\\NotaRepository',
        ]);
    }
}
