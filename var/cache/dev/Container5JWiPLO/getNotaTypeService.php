<?php

namespace Container5JWiPLO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotaTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\NotaType' shared autowired service.
     *
     * @return \App\Form\NotaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/NotaType.php';

        return $container->privates['App\\Form\\NotaType'] = new \App\Form\NotaType();
    }
}