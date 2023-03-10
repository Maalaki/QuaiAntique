<?php

namespace ContainerQAccwrF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TlBnDBhService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.tlBnDBh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tlBnDBh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', true],
        ], [
            'menuRepository' => 'App\\Repository\\MenuRepository',
        ]);
    }
}
